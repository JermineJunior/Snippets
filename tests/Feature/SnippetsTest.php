<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class SnippetsTest extends TestCase
{
 //use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $snippet = factory('App\Snippet')->create();
        $this->withExceptionHandling();
        $response = $this->get('/');

        $response->assertSee($snippet->title);
    }
}
