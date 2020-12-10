<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\Browser\Pages\Home;
use Tests\Browser\Pages\Login;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    public function setUp(): void
    {
        parent::setup();

        static::closeAll();
    }

    /** @test */
    public function login_with_valid_credentials()
    {
        $user = User::factory()->create();

        $this->browse(function ($browser) use ($user) {
            $browser->visit(new Login)
                ->submit($user->email, 'password')
                ->assertPageIs(Home::class);
        });
    }

    /** @test */
    public function login_with_invalid_credentials()
    {
        $this->browse(function ($browser) {
            $browser->visit(new Login)
                ->submit('test@test.app', 'password')
                ->assertSee('These credentials do not match our records.');
        });
    }

    /** @test */
    public function log_out_the_user()
    {
        $user = User::factory()->create();

        $this->browse(function ($browser) use ($user) {
            $browser->visit(new Login)
                ->submit($user->email, 'password')
                ->on(new Home)
                ->clickLogout()
                ->assertPageIs(Login::class);
        });
    }
}
