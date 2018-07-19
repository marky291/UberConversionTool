<?php

namespace App\Classes;

use App\Interfaces\ItemInterface;
use App\Item;
use Illuminate\Support\Collection;

/**
 * Class DonationItems
 *
 * @package App\Classes
 */
class DonationItems extends Collection
{

    /**
     * The items contained in the collection.
     *
     * @var array
     */
    protected $items = [];

    /**
     * Get the item name of the item passed from donations.
     * We can only retrive convertable items.
     *
     * @param ItemInterface $item
     * @return Collection
     */
    public function getName($item)
    {
        return $this->lookup($item)['name'];
    }

    /**
     * Get the item name of the item passed from donations.
     * We can only retrive convertable items.
     *
     * @param ItemInterface|int $item
     * @return double
     * @throws \Exception
     */
    public function getPrice($item)
    {
        return $this->lookup($item)['price'];
    }

    /**
     * Get the minimum refine rate of an item from the donation
     * configurations file.
     *
     * @param $item
     * @return mixed
     */
    public function getRefineMin($item)
    {
        if (isset($this->lookup($item)['refineMin'])) {
            return $this->lookup($item)['refineMin'];
        }

        return 0;
    }

    /**
     * @param ItemInterface $item
     * @return float|\Illuminate\Config\Repository|int|mixed
     * @throws \Exception
     */
    public function getCalculatedPrice(ItemInterface $item)
    {
        return $this->getPriceBasedOnRefineCount($item) + $this->getItemSlottedCardValue($item);
    }

    /**
     * @param ItemInterface $item
     * @return float|int
     * @throws \Exception
     */
    public function getCalculatedValue(ItemInterface $item)
    {
        return $this->getCalculatedPrice($item) / Conversions::configuration('uber.price') * Conversions::configuration('uber.value');
    }

    /**
     * @param ItemInterface $item
     * @return \Illuminate\Config\Repository|mixed
     * @throws \Exception
     */
    public function getPriceBasedOnRefineCount(ItemInterface $item)
    {
        if (isset($this->get($item->nameid)['refine']) && $this->get($item->nameid)['refine'] == false) {
            return $this->getPrice($item->nameid) * $item->amount;
        }

        return $this->getPrice($item->nameid) / 100 * Conversions::configuration("refine.{$item->refine}") * $item->amount;
    }

    /**
     * @param ItemInterface $item
     * @return float|int
     * @throws \Exception
     */
    private function getItemSlottedCardValue(ItemInterface $item)
    {
       return $this->getCardCollection($item)->sum(function($card) {
            return $this->getPrice($card);
        });
    }

    /**
     * Get the card collection from the item.
     *
     * @param ItemInterface $item
     * @return Collection
     */
    public function getCardCollection(ItemInterface $item)
    {
        return $this->filterDonatable(collect([$item->card0, $item->card1, $item->card2, $item->card3])->filter());
    }

    /**
     * We only want to keep the items that we can actually use.
     * This filter sorts the collection to only have items for converter.
     *
     * @param Collection $items
     * @return Collection
     */
    private function filterDonatable(Collection $items)
    {
        return $items->filter(function($item) {
            return $this->has($item);
        });
    }

    /**
     * Lookup an item using the interface or with an integer.
     *
     * @param ItemInterface|int $item The passed item for lookup.
     * @return array The array of the item from configuration.
     */
    private function lookup($item)
    {
        if ($item instanceof ItemInterface) {
            return $this->get($item->nameid);
        }

        return $this->get($item);
    }

    /**
     * Check the item has the minimum requirement level.
     *
     * @param $item
     * @return bool
     */
    public function hasMinimumRefineCount(ItemInterface $item)
    {
        return $item->refine >= $this->getRefineMin($item);
    }
}