<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register') 
                    ->type('name','aqila') //mengisi kolom nama pada form dengan aqila
                    ->type('email','aqila2@gmail.com') // mengisi kolom email pada form dengan aqila2@gmail.com
                    ->type('password','12345') //mengisi password dengan 12345
                    ->type('password_confirmation','12345') //mengisi passwordC dengan 12345
                    ->press('REGISTER') // menekan tombol register
                    ;
        });
    }
}
