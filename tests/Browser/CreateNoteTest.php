<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testCreate(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') 
            ->type('email','aqila2@gmail.com')
            ->type('password','12345')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
            ->clickLink('Notes') 
            ->clickLink("Create Note")
            ->type('title','Report')
            ->type('description','hari ini praktikum ppl')
            ->press('CREATE')
            ;
        });
    }
}
