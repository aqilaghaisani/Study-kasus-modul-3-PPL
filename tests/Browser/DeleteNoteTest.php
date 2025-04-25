<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function DeleteNoteExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') 
            ->type('email','aqila2@gmail.com')
            ->type('password','12345')
            ->press('LOG IN')
            ->clickLink('Notes')
            ->assertPathIs('/notes')
            ->visit('/notes')
            ->assertSee('Notes')
            ->press('Delete')
            ;
        });
    }
}
