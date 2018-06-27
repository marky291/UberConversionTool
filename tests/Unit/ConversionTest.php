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
        $collection = $this->collect('App\Inventory', ['nameid' => 5013, 'refine' => 8, 'amount' => 1]);

        $item = $collection->first();

        $conversion = new Conversions($collection, app(DonationItems::class));

        $this->assertEquals(7, $conversion->getTotalPrice());
        $this->assertEquals(350, $conversion->getTotalValue());
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

        $user = $this->model('App\LoginBG', ['account_id' => 2593445]);

        $this->model('App\Storage', ['nameid' => 3180, 'amount' => 1, 'refine' => 10, 'account_id' => auth()->user()->account_id]);

        $this->post('/convert', ['username' => $user->userid, 'password' => 'password']);

        $this->assertDatabaseHas('uber_balance', ['account_id' => $user->account_id], 'xilero_bg');
    }


    private function generateItems()
    {
        return EloquentCollection::make([
            $this->model('App\Inventory', ['nameid' => 512, 'refine' => 8]),
            $this->model('App\Cart', ['nameid' => 514, 'refine' => 0]),
        ]);
    }
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
