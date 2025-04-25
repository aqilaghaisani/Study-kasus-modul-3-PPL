<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testEdit(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') 
            ->type('email','aqila2@gmail.com')
            ->type('password','12345')
            ->press('LOG IN')
            ->clickLink('Notes') 
            ->click("@edit-1")
            ->type('title','Report hari ini')
            ->type('description','hari ini praktikum pplnya lancar')
            ->press('UPDATE')
            ;
        });
    }
}
