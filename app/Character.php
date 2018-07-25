<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Character
 *
 * @property int $char_id
 * @property Guild $guild
 *
 * @package App
 */
class Character extends Model
{
    /**
     * @var string
     */
    protected $table = 'char';

    //protected $with = ['inventory', 'cart'];

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'char_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Return the characters inventory items.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventory()
    {
        return $this->hasMany('App\Inventory', 'char_id', 'char_id');
    }

    /**
     * Return the characters cart items.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cart()
    {
        return $this->hasMany('App\Cart', 'char_id', 'char_id');
    }

    /**
     * Return the user that the character belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'account_id', 'account_id');
    }

    /**
     * Return the guild a character can belong to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne|Guild
     */
    public function guild()
    {
        return $this->hasOne('App\Guild', 'guild_id', 'guild_id');
    }

    /**
     * Check if the character is the creator of the guild.
     *
     * @return bool
     */
    public function isGuildCreator()
    {
        return $this->guild->isCreatedBy($this);
    }

    /**
     * Return a collection of items stored in the relation.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getAllItems()
    {
        return $this->cart->merge($this->inventory);
    }

    /**
     * Get the total count of stored items belonging to this character
     *
     * @return int
     */
    public function getAllItemsCount()
    {
        return $this->inventory()->count() + $this->cart()->count();
    }
}
