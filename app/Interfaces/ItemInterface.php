<?php

namespace App\Interfaces;

/**
 * Interfaces ItemInterface
 *
 * @property int $nameid
 * @property int $amount
 * @property int $refine
 * @property int $card0
 * @property int $card1
 * @property int $card2
 * @property int $card3
 *
 * @package App
 */
interface ItemInterface
{
    /**
     * Return the collection image of an item.
     *
     * @return string
     */
    public function image();

    /**
     * Return the icon image of the item.
     *
     * @return string
     */
    public function icon();
}