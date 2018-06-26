<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LoginBG
 *
 * @property string $account_id
 * @property string userid
 * @property string $user_pass
 *
 * @package App
 */
class LoginBG extends Model
{
    /**
     * @var string
     */
    protected $table = 'login';

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
}
