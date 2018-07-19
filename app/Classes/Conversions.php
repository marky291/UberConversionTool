<?php
/**
 * Created by PhpStorm.
 * User: Marky
 * Date: 23/06/2018
 * Time: 11:34
 */

namespace App\Classes;

use App\Exceptions\DonationMissingField;
use App\User;
use \DB;
use App\Interfaces\ItemInterface;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

/**
 * Class Conversions
 *
 * @package App\Classes
 */
class Conversions
{

    /**
     * The configuration to use for lookups.
     *
     * @var string
     */
    const configuration = 'xilero.donation';

    /**
     * The available items for conversion.
     *
     * @var Collection
     */
    public $donations;

    /**
     * The items the user has added to the conversion.
     *
     * @var EloquentCollection
     */
    public $items;

    /**
     * Conversions constructor
     *
     * @param Collection $items
     * @param DonationItems $donations
     */
    public function __construct(Collection $items, DonationItems $donations)
    {
        $this->donations = $donations->keyBy('id');

        $this->items = $this->parseUsable($items);
    }

    /**
     * We only want to keep the items that we can actually use.
     *
     * @param Collection $items
     * @return Collection
     */
    private function parseUsable(Collection $items)
    {
        return $items->filter(function(ItemInterface $item) {
            return $this->donations->has($item->nameid) && $this->donations->hasMinimumRefineCount($item);
        });
    }

    /**
     * Get the total value in Price that is pending conversion.
     *
     * @return int
     */
    public function getTotalPrice()
    {
       return $this->items->map(function(ItemInterface $item) {
            return $this->donations->getCalculatedPrice($item);
        })->sum();
    }

    /**
     * Get the total value in Points that is pending conversion.
     *
     * @return int
     */
    public function getTotalValue()
    {
        return $this->getTotalPrice() / self::configuration('uber.price') * self::configuration('uber.value');
    }

    /**
     * Get the configuration key based on the configuration name on this class.
     *
     * @param string $key
     * @return \Illuminate\Config\Repository|mixed
     */
    public static function configuration(string $key)
    {
        return config(self::configuration . '.' . $key);
    }
}