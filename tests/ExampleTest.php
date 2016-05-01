<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testWelcomePageCrawler()
    {
        $this->visit('/')
             ->see('ToDo')
             ->see('Home')
             ->see('Login')
             ->see('Register')
             ->see('What you have To Do :)')
             ->see('Use our app to list out what TO DO')
             ->click('Login')
             ->seePageIs('/login')
             ->click('Register')
             ->seePageIs('/register');
    }
}
