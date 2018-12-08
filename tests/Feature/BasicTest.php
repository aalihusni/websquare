<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BasicTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $payload = 'The softbottomcat is jumping over a memecat and fell down on top of catnips';
        $response = $this->json('POST', '/api/test', ['input' => $payload]);

        $response
            ->assertStatus(200)
            ->assertJson([
                "softbottomcat",
                "memecat"
            ]);
    }

    public function testExample2()
    {
        $payload2 = 'Electrocatosis is a process where a oxycat is transmuted-cat into hydrogen cat';
        $response = $this->json('POST', '/api/test', ['input' => $payload2]);

        $response
            ->assertStatus(200)
            ->assertJson([
                "oxycat",
                "transmuted-cat"
            ]);
    }
    public function testExample3()
    {
        $payload3 = 'When cat hits the fan, the cat and the fan shall become one catfan';
        $response = $this->json('POST', '/api/test', ['input' => $payload3]);

        $response
            ->assertStatus(200)
            ->assertJson([
            ]);
    }
}
