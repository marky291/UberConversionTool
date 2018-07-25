<?php

namespace Tests\Feature;

use App\Classes\Conversions;
use App\Classes\DonationItems;
use App\Jobs\ProcessItemConversion;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConversionTest extends TestCase
{
    use WithoutMiddleware;

    use RefreshDatabase;

    public function test_authentication_is_required_to_view_the_homepage()
    {
        $this->withMiddleware();

        $this->withExceptionHandling();

        $this->get('/')->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function test_gm_levels_cannot_convert()
    {
        $this->withMiddleware()->signIn();

        $character = $this->model('App\Character', ['account_id' => auth()->user()->account_id]);
        $this->model('App\Inventory', ['nameid' => 3187, 'char_id' => $character->char_id]);
        $this->model('App\Inventory', ['nameid' => 923, 'char_id' => $character->char_id]);
        $this->model('App\Inventory', ['nameid' => 22689, 'char_id' => $character->char_id]);
        $this->model('App\Storage', ['nameid' => 22651, 'account_id' => auth()->user()->account_id]);
        $this->model('App\Storage', ['nameid' => 844, 'account_id' => auth()->user()->account_id]);
        $this->model('App\Cart', ['nameid' => 3001, 'char_id' => $character->char_id]);

        $this->get('/')->assertSee("Your account is not allowed to request an item conversion!")->assertSee('GM Account');
    }

    /**
     * @test
     */
//    public function test_overview_page()
//    {
//        $this->signIn(['level' => 0]);
//
//        $character = $this->model('App\Character', ['account_id' => auth()->user()->account_id]);
//        $this->model('App\Inventory', ['nameid' => 3187, 'char_id' => $character->char_id]);
//        $this->model('App\Inventory', ['nameid' => 923, 'char_id' => $character->char_id]);
//        $this->model('App\Inventory', ['nameid' => 22689, 'char_id' => $character->char_id]);
//        $this->model('App\Storage', ['nameid' => 22651, 'account_id' => auth()->user()->account_id]);
//        $this->model('App\Storage', ['nameid' => 844, 'account_id' => auth()->user()->account_id]);
//        $this->model('App\Cart', ['nameid' => 3001, 'char_id' => $character->char_id]);
//
//        $this->get('/')
//            ->assertSee("4/6 Items available for conversion!")
//            ->assertSee('Convert Now!')
//            ->assertOk();
//    }

    public function test_an_account_can_convert_items_for_ubers()
    {
        $this->signIn(['level' => 0]);
        $account = $this->model('App\LoginBG', ['group_id' => 0]);
        $character = $this->model('App\Character', ['account_id' => auth()->user()->account_id, 'guild_id' => 1]);
        $guild = $this->model('App\Guild', ['guild_id' => 1, 'char_id' => $character->char_id, 'master' => $character->name]);

        $this->model('App\Inventory', ['nameid' => 3187, 'amount' => 1, 'char_id' => $character->char_id]);
        $this->model('App\Inventory', ['nameid' => 3185, 'amount' => 1, 'char_id' => $character->char_id]);
        $this->model('App\Storage', ['nameid' => 3180, 'amount' => 1, 'account_id' => auth()->user()->account_id]);
        $this->model('App\Cart', ['nameid' => 2506, 'amount' => 1, 'refine' => 10, 'char_id' => $character->char_id]);
        $this->model('App\GuildStorage', ['nameid' => 5089, 'amount' => 1, 'refine' => 10, 'guild_id' => $guild->guild_id]);

        Queue::fake();
        $response = $this->post('/convert', ['username' => $account->userid, 'password' => 'password']);
        Queue::assertPushed(ProcessItemConversion::class, 5);

        $response->assertRedirect('/');
    }

    /**
     * @test
     */
    public function test_convertion_does_not_work_on_unknown_account()
    {
        $this->signIn(['level' => 0]);

        $account = $this->generate('App\LoginBG', ['group_id' => 0], 1)->first();

        $character = $this->model('App\Character', ['account_id' => auth()->user()->account_id]);
        $this->model('App\Inventory', ['nameid' => 3187, 'char_id' => $character->char_id]);

        $response = $this->post('/convert', ['username' => $account->userid, 'password' => $account->user_pass]);

        $response->assertRedirect('/')->assertSessionHas('errors')->assertStatus(302);
    }
}
