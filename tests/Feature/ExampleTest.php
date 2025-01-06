<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Message;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        
    }

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_getMessages(): void
    {
        $response = $this->get('/api/messages');

        $response->assertStatus(200);
    }

    public function test_Create_Message(): void
    {
        $message = [
            'content' => 'dummy',
            'x' => 0,
            'y' => 0,
        ];
        $response = $this->post('/api/messages', $message);
        $response->assertStatus(200);
    }

}
