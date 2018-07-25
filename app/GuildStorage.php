<?php

namespace App;

use App\Interfaces\ItemInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer nameid
 * @property integer guild_id
 * @property integer amount
 * @property integer refine
 * @property integer card0
 * @property integer card1
 * @property integer card2
 * @property integer card3
 */
class GuildStorage extends Model implements ItemInterface
{
    /**
     * This class is an item.
     */
    use Item;

    /**
     * @var string
     */
    protected $table = 'guild_storage';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
