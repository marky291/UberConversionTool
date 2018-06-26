<?php

namespace App\Jobs;

use App\Classes\Conversions;
use App\Classes\DonationItems;
use App\Interfaces\ItemInterface;
use App\LoginBG;
use App\UberBalance;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * @property User sender
 */
class ProcessItemConversion implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The item to be processed.
     *
     * @var ItemInterface
     */
    private $item;

    /**
     * @var LoginBG
     */
    private $reciever;

    /**
     * @var User
     */
    private $sender;

    /**
     * Create a new job instance.
     *
     * @param Model $item
     * @param User $sender
     * @param LoginBG $reciever
     */
    public function __construct(User $sender, LoginBG $reciever, Model $item)
    {
        $this->item = $item;

        $this->sender = $sender;

        $this->reciever = $reciever;
    }

    /**
     * Execute the job.
     *
     * @return void
     * @throws \Exception
     */
    public function handle(DonationItems $donations)
    {
       DB::transaction(function() use ($donations) {

           $item = $this->sender->getInventory()->first(function (Model $item) {
               return $this->item->is($item);
           });

           if (UberBalance::addPending($donations->getCalculatedValue($item), $this->reciever)) {
               if (app()->environment('local')) {
                   Log::info("Processed item '{$donations->getName($item)}' (ID:{$item->nameid}, Refine:{$item->refine}, Amount:{$item->amount}, UniqueKey:{$item->id}) :::: '{$donations->getCalculatedValue($item)}' ubers sent to '{$this->reciever->userid}({$this->reciever->account_id})' from {$this->sender->userid}({$this->sender->account_id})");
               } else {
                   if ($item->delete()) {
                       Log::info("Processed item '{$donations->getName($item)}' (ID:{$item->nameid}, Refine:{$item->refine}, Amount:{$item->amount}, UniqueKey:{$item->id}) :::: '{$donations->getCalculatedValue($item)}' ubers sent to '{$this->reciever->userid}({$this->reciever->account_id})' from {$this->sender->userid}({$this->sender->account_id})");
                   }
               }
           }

       }, 5);
    }

    /**
     * The job failed to process.
     *
     * @param  Exception  $exception
     * @return void
     */
    public function failed(Exception $exception)
    {
        //
    }
}
