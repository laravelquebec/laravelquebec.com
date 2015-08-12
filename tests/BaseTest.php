<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BaseTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testIsTitleThere()
    {
        $this->visit('/')
             ->see('Laravel Québec!');
    }
}
