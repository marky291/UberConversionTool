<?php

namespace Tests\Unit;

use App\Character;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CharacterTest extends TestCase
{
    /**
     * @test
     */
    public function test_character_has_inventory()
    {
        $character = $this->model('App\Character');

        $this->collect('App\Inventory', ['char_id' => $character->char_id], 35);

        $this->assertCount(35, $character->inventory);
    }

    /**
     * @test
     */
    public function test_character_has_cart()
    {
        $character = $this->model('App\Character');

        $this->collect('App\Cart', ['char_id' => $character->char_id], 35);

        $this->assertCount(35, $character->cart);
    }

    /**
     * @test
     */
    public function test_character_can_retrieve_total_available_items_count()
    {
        $character = $this->model('App\Character');

        $this->collect('App\Cart', ['char_id' => $character->char_id], 45);
        $this->collect('App\Inventory', ['char_id' => $character->char_id], 55);

        $this->assertEquals(100, $character->getAllItemsCount());
    }

    /**
     * @test
     */
//    public function test_character_can_retrieve_collection_of_items()
//    {
//        $character = $this->model('App\Character');
//
//        $this->collect('App\Cart', ['char_id' => $character->char_id], 75);
//        $this->collect('App\Inventory', ['char_id' => $character->char_id], 25);
//
//        $this->assertCount(100, $character->getTotalStoredItems());
//    }
}
