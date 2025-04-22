<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    #mengunjungi halaman utama
                    ->assertSee('Enterprise')
                    #melihat teks laravel
                    ->clickLink('Registrasi')
                    #mengklik link registrasi
                    ->assertPathIs('/regis')
                    #memastikan url menuju ke halaman registrasi
                    ->type('email', 'user@gmail.com')
                    #mengisi input berupa email
                    ->type('username', 'user')
                    #mengisi input berupa username
                    ->type('password', 'password')
                    #mengisi input berupa password
                    ->press('Registrasi')
                    #menekan tombol registrasi
                    ->assertPathIs('/login');
                    #memastikan url menuju ke halaman login


        });
    }
}
