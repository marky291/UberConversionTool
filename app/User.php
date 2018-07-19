<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Collection;

/**
 * Class User
 *
 * @property string $userid
 * @property string $user_pass
 * @property int $level
 * @property int $state
 * @property string $last_ip
 * @property string $email
 * @property Collection $characters
 * @property Storage storage
e *
 * @package App
 */
class User extends Authenticatable
{
    /**
     * @var string
     */
    protected $table = 'login';

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
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->user_pass;
    }

    /**
     * The relationship of the characters to the account.
     *
     * @return Collection|\Illuminate\Database\Eloquent\Relations\HasMany|Collection
     */
    public function characters()
    {
        return $this->hasMany('App\Character', 'account_id', 'account_id');
    }

    /**
     * An account holds a storage.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function storage()
    {
        return $this->hasMany('App\Storage', 'account_id', 'account_id');
    }

    /**
     * Get the total count of characters the account holds.
     * This will use the relationship of the account.
     *
     * @return integer
     */
    public function getCharacterCount()
    {
        return $this->characters->count();
    }

    /**
     * Get the total count of inventory items the account holds.
     * This will search through all the characters available
     * to the account.
     *
     * @return integer
     */
    public function getInventoryCount()
    {
       return $this->getInventory()->count();
    }

    /**
     * @return mixed
     */
    public function getInventory()
    {
        $this->with('storage', 'characters.inventory', 'characters.cart');

        $collection = new Collection;

        foreach ($this->storage as $storage) {
            $collection->push($storage);
        }

        foreach ($this->characters as $character) {
            foreach ($character->inventory as $inventory) {
                $collection->push($inventory);
            }
            foreach ($character->cart as $cart) {
                $collection->push($cart);
            }
        }

        return $collection;
    }

    /**
     * Check if the user is a banned account.
     *
     * @return bool
     */
    public function isBanned()
    {
        return $this->state == 5;
    }
}
