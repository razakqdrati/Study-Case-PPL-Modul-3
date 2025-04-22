<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clicklink('Edit Notes')
                    ->assertPathIs(('/editnote'))
                    ->type('Edit note name', 'Ganti nama note')
                    ->type('Edit isi', 'Note ini berisi..')
                    ->press('Simpan')
                    ->assertPathIs('/dashboard');
        });
    }
}
