<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UberBalance extends Model
{
    /**
     * @var string
     */
    protected $table = 'uber_balance';

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'xilero_bg';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'account_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Protected attributes
     *
     * @var array
     */
    public $guarded = [];

    /**
     * @return mixed
     */
    public static function addPending(int $balance, LoginBG $reciever)
    {
        $row =  UberBalance::firstOrCreate([], ['account_id' => $reciever->account_id]);

        return $row->increment('pending', $balance);
    }
}
