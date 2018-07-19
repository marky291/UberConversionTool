<?php

namespace Tests\Unit;

use App\Cart;
use App\Classes\Conversions;
use App\Classes\DonationItems;
use App\Inventory;
use App\LoginBG;
use App\Storage;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Collection;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConversionTest extends TestCase
{

    use WithoutMiddleware;

    use RefreshDatabase;

    /**
     * Parent boot.
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * The conversion tool can add an item.
     */
    public function test_conversion_loads_inventory_items()
    {
        $conversion = new Conversions($this->generateItems(), $this->generateConfig());

        $this->assertCount(1, $conversion->items);
    }

    /**
     * @test
     */
    public function test_conversion_loads_donation_items()
    {
        $conversion = new Conversions($this->generateItems(), $this->generateConfig());

        $this->assertCount(2, $conversion->donations);
    }

    /**
     * @test
     */
    public function test_converted_items_with_refine_returns_price()
    {
        $collection = $this->collect('App\Inventory', ['nameid' => 512, 'refine' => 10, 'amount' => 2]);

        $conversion = new Conversions($collection, $this->generateConfig());

        $this->assertEquals(4000, $conversion->getTotalPrice());
    }

    /**
     * @test
     */
    public function test_conversion_converts_item_correctly()
    {
        $collection = $this->collect('App\Inventory', ['nameid' => 5013, 'refine' => 10, 'amount' => 1, 'card0' => 0, 'card1' => 0, 'card2' => 0, 'card3' => 0]);

        $item = $collection->first();

        $conversion = new Conversions($collection, app(DonationItems::class));

        $this->assertEquals(10, $conversion->getTotalPrice());
        $this->assertEquals(500, $conversion->getTotalValue());
    }

    /**
     * @test
     */
    public function test_converted_items_with_no_refine_returns_price()
    {
        $collection = $this->collect('App\Inventory', ['nameid' => 513, 'amount' => 1]);

        $conversion = new Conversions($collection, $this->generateConfig());

        $this->assertEquals(2000, $conversion->getTotalPrice());
    }

    /**
     * @test
     */
    public function test_converted_items_go_to_correct_account_id()
    {
        $this->signIn(['level' => 0]);

        $user = $this->model('App\LoginBG');

        $this->model('App\Storage', ['nameid' => 3180, 'amount' => 1, 'refine' => 10, 'account_id' => auth()->user()->account_id]);

        $this->post('/convert', ['username' => $user->userid, 'password' => 'password']);

        $this->assertDatabaseHas('uber_balance', ['account_id' => $user->account_id], 'xilero_bg');
    }

    /**
     * @test
     */
    public function test_item_with_decimals_correctly_get_priced()
    {
       $collection =  $this->collect('App\Inventory', ['nameid' => 3132, 'amount' => 9, 'refine' => 0, 'card0' => 0, 'card1' => 0, 'card2' => 0, 'card3' => 0], 1);

       $conversion = new Conversions($collection, app(DonationItems::class));

       $this->assertEquals(0.90, $conversion->getTotalPrice());
    }

    /**
     * @test
     */
    public function test_item_with_minimum_refine_rate_does_not_get_added()
    {
        $collection =  $this->collect('App\Inventory', ['nameid' => 5013, 'amount' => 1, 'refine' => 9, 'card0' => 0, 'card1' => 0, 'card2' => 0, 'card3' => 0], 1);

        $conversion = new Conversions($collection, app(DonationItems::class));

        $this->assertEquals(0, $conversion->getTotalPrice());

        $collection =  $this->collect('App\Inventory', ['nameid' => 5013, 'amount' => 1, 'refine' => 10, 'card0' => 0, 'card1' => 0, 'card2' => 0, 'card3' => 0], 1);

        $conversion = new Conversions($collection, app(DonationItems::class));

        $this->assertEquals(10, $conversion->getTotalPrice());

    }

    /**
     * Mock a Eloquent Collection.
     *
     * @return EloquentCollection
     */
    private function generateItems()
    {
        return EloquentCollection::make([
            $this->model('App\Inventory', ['nameid' => 512, 'refine' => 8]),
            $this->model('App\Cart', ['nameid' => 514, 'refine' => 0]),
        ]);
    }

    /**
     * Mock a configuration.
     *
     * @return DonationItems
     */
    private function generateConfig()
    {
        return new DonationItems([
            [
                'id' => '512',
                'name' => 'Apple',
                'price' => 2000
            ],
            [
                'id' => '513',
                'name' => 'Apple',
                'price' => 2000,
                'refine' => false
            ]
        ]);
    }
}
