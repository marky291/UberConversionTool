<?php
/**
 * Created by PhpStorm.
 * User: Marky
 * Date: 23/06/2018
 * Time: 00:48
 */

namespace App;

/**
 * Trait ItemInterface
 *
 * @package App
 */
trait Item
{

    /**
     * Return the collection image of an item.
     *
     * @return string
     */
    public function image()
    {
        if (file_exists(public_path("images/items/{$this->nameid}.bmp"))) {
            return url("images/items/{$this->nameid}.bmp");
        }

        if (file_exists(public_path("images/items/{$this->nameid}.png"))) {
            return url("images/items/{$this->nameid}.png");
        }

        if (file_exists(public_path("images/items/{$this->nameid}.jpg"))) {
            return url("images/items/{$this->nameid}.jpg");
        }

        return "https://www.divine-pride.net/img/items/collection/iRO/{$this->nameid}";
    }

    /**
     * Return the icon image of the item.
     *
     * @return string
     */
    public function icon()
    {
        return "https://static.divine-pride.net/images/items/item/{$this->nameid}.png";
    }

}