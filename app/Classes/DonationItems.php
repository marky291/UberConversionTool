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
        if ($item instanceof ItemInterface) {
            return $this->get($item->nameid)['name'];
        }

        return $this->get($item)['name'];
    }

    /**
     * Get the item name of the item passed from donations.
     * We can only retrive convertable items.
     *
     * @param ItemInterface $item
     * @return
     * @throws \Exception
     */
    public function getPrice($item)
    {
        if ($item instanceof ItemInterface) {
            return $this->get($item->nameid)['price'];
        }

        return $this->get($item)['price'];
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
        if (isset($this->get($item->nameid)['refine'])) {
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
        return $this->parseDonatableItems(collect([$item->card0, $item->card1, $item->card2, $item->card3])->filter());
    }

    /**
     * We only want to keep the items that we can actually use.
     *
     * @param Collection $items
     * @return Collection
     */
    private function parseDonatableItems(Collection $items)
    {
        return $items->filter(function($item) {
            return $this->has($item);
        });
    }
}