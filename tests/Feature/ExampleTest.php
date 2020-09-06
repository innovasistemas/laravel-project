<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    /** @test */
//    public function test_loadUrlTest() //If not set the anotation
    public function loadUrlTest()
    {
        $this->get('/data/param1/{id}')
            ->assertStatus(200)
            ->assertSee('1');
    }
}
