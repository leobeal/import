<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FlubTest extends TestCase
{
    /** @test */
    public function generate_array_from_file()
    {
        $flub = new \App\Classes\FlubDataImporter();

        var_dump($flub->Import());

        $this->assertTrue(true);
    }
}
