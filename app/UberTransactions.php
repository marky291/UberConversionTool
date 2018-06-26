<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UberTransactions extends Model
{
    /**
     * @var string
     */
    protected $table = 'uber_transactions';

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
     * Log a transaction on the uber change.
     *
     * @param int $balance
     * @param int $totalBalance
     * @param LoginBG $account
     * @param string $type
     * @return mixed
     */
    public static function  logTransaction(int $balance, int $total, LoginBG $account, string $type = 'income')
    {
        return UberTransactions::create([
            'account_id' => $account->account_id,
            'ip_address' => request()->getClientIp(),
             $type => $balance,
            'balance' => $total,
            'type' => 16,
            'timestamp' => Carbon::now(),
        ]);
    }
}
