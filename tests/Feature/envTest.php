<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class envTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetEnv()
    {
        $youtube = env('YOUTUBE');

        self::assertEquals('Programmer Zaman Now', $youtube);
    }
}
