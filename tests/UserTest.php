<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSignUp()
    {
        $this->visit('/')
            ->type('Oleg', 'first_name')
            ->type('Dolgarev', 'last_name')
            ->select('male', 'gender')
            ->type('olsingle@mail.ru', 'email')
            ->type('test123', 'password')
            ->type('test123', 'password_confirmation')
            ->press('Sign Up')
            ->seeInDatabase('users', ['email' => 'olsingle@mail.ru'])
            ->see('Laravel 5');
    }
}
