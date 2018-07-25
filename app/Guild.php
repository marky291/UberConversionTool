<?php

namespace App;

use App\Interfaces\ItemInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer char_id
 * @property string master
 * @property string name
 * @property string mes1
 * @property string mes2
 *
 * @property ItemInterface $storage
 * @property Character $leader
 */
class Guild extends Model
{
    /**
     * @var string
     */
    protected $table = 'guild';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'guild_id';

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
     * A guild has a leader.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|Character
     */
    public function leader()
    {
        return $this->belongsTo('App\Character', 'char_id', 'char_id');
    }

    /**
     * A guild has lots of storage items.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function storage()
    {
        return $this->hasMany('App\GuildStorage', 'guild_id', 'guild_id');
    }

    /**
     * Is the character the creator/owner of the guild.
     *
     * @param Character $character
     *
     * @return bool
     */
    public function isCreatedBy(Character $character)
    {
        return $this->getAttribute('char_id') == $character->char_id;
    }
}
