<?php

namespace Tests\Unit;

use App\Classes\Conversions;
use App\Classes\DonationItems;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function test_user_character_count()
    {
        $user = $this->model('App\User');

        $this->collect('App\Character', ['account_id' => $user->account_id], 3);

        $this->assertEquals(3, $user->getCharacterCount());
    }
    /*
     * @test
     */
    public function test_user_inventory_count()
    {
        /** @var User $user */
        $user = $this->model('App\User');

        $character1 = $this->model('App\Character', ['account_id' => $user->account_id]);
        $character2 = $this->model('App\Character', ['account_id' => $user->account_id]);
        $storage1 = $this->model('App\Storage', ['account_id' => $user->account_id]);
        $inventory1 = $this->model('App\Inventory', ['char_id' => $character1->char_id]);
        $inventory2 = $this->model('App\Inventory', ['char_id' => $character2->char_id]);
        $cartStorage = $this->model('App\Cart', ['char_id' => $character1->char_id]);

        $this->assertCount(4, $user->getInventory());
    }

    /**
     * @test
     */
    public function test_user_with_duplicate_item_ids_process_correctly()
    {
        $user = $this->model('App\User');

        $storage = $this->collect('App\Storage', ['account_id' => $user->account_id, 'nameid' => 5013], 3);
        $storage2 = $this->collect('App\Storage', ['account_id' => $user->account_id, 'nameid' => 5015], 3);

        $conversion = new Conversions($storage->merge($storage2), app(DonationItems::class));

        $this->assertCount(3, $conversion->items);

    }
}
