<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') 
            ->type('email','aqila2@gmail.com') // mengisi kolom email pada form dengan aqila2@gmail.com
            ->type('password','12345') 
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ;
        });
    }
}
