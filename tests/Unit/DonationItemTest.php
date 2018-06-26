<?php

namespace Tests\Unit;

use App\Classes\DonationItems;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DonationItemTest extends TestCase
{
    /**
     * @var DonationItems
     */
    private $donations;

    /**
     * Setup the test data.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->donations = app(DonationItems::class);
    }

    /**
     * A basic test example.
     *
     * @return void
     * @throws \Exception
     */
    public function test_donation_item_value_and_price()
    {
        $item = $this->model('App\Inventory', ['nameid' => 5013, 'refine' => 10, 'amount' => 1, 'card0' => 4211, 'card1' => 4210, 'card2' => 4209, 'card3' => 4208]);

        $this->assertEquals(90, $this->donations->getCalculatedPrice($item));
        $this->assertEquals(4500, $this->donations->getCalculatedValue($item));
    }

    public function test_donation_items_with_duplicate_id_throws_errors()
    {
        // @todo: Write this test.
    }
}
