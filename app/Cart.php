<?php

namespace App;

use App\Interfaces\ItemInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Cart
 *
 * @property int $name
 * @property int $amount
 * @property int $refineCount
 *
 * @package App
 */
class Cart extends Model implements ItemInterface
{
    /**
     * This class is an item.
     */
    use Item;

    /**
     * @var string
     */
    protected $table = 'cart_inventory';

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
