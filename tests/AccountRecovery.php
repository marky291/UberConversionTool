<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class AccountRecovery
 *
 * @package Tests\Feature
 */
class AccountRecovery extends TestCase
{

    use WithoutMiddleware;

    /**
     * @test
     */
    public function a_user_can_see_a_recover_link_on_login_page()
    {
        $this->get('/login')->assertSee('Recover Account');
    }

    /**
     * @test
     */
    public function a_user_can_visit_the_recovery_page_when_not_logged_in()
    {
        $this->withExceptionHandling();

        $this->get('/recovery')->assertSee("Automatic Recovery Process");

        $this->signIn();

        $this->withMiddleware();

        $this->get('/recovery')->assertRedirect('/');
    }

    /**
     * @test
     */
    public function a_user_can_view_the_manual_recovery_page_even_when_logged_in()
    {
        $this->withMiddleware()->followingRedirects();

        $this->get('/recovery/failed')->assertSee('Manual Recovery');

        $this->signIn();

        $this->get('/recovery/failed')->assertRedirect('/');
    }

    /**
     * @test
     */
    public function a_user_cannot_recover_an_account_with_a_default_email()
    {
        $this->withoutExceptionHandling();

        $account = factory('App\User')->make(['email' => 'a@a.com']);

        $response = $this->post('/recovery', $account->only(['userid', 'email']));

        $response->assertRedirect(route('recovery.failed'));
    }

    /**
     * @test
     */
    public function a_user_can_login_to_an_existing_os_account_with_email_and_username_recovery_form()
    {
        $this->followingRedirects();

        $this->withExceptionHandling();

        $this->withMiddleware();

        $account = $this->model('App\User');

        $response = $this->post('/recovery', $account->only(['userid', 'email']));

        $user_logged_in = auth()->check();

        $this->assertTrue($user_logged_in);

        $response->assertSee('/recovery/success')->assertSee('Recovery Successful');
    }

    /**
     * @test
     */
    public function recovery_success_cannot_be_viewed_by_normal_request()
    {
        $this->withoutExceptionHandling();

        $this->followingRedirects();

        $response = $this->get('/recovery/success');

        $response->assertDontSee('/recovery/success');
    }

    /**
     * @test
     */
    public function a_user_can_recover_account_using_thier_last_ip_and_current_system_ip_address_automatically()
    {
        $this->followingRedirects();

        $account = $this->model('App\User', ['email' => 'a@a.com']);

        $response = $this->post('/recovery', $account->only(['userid', 'email']), ['REMOTE_ADDR' => $account->last_ip]);

        $response->assertSee('/recovery/success');
    }
}
