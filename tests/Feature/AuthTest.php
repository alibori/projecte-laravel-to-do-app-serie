<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_redirects_successfully()
    {
        $this->withoutMiddleware();

        // Create a fake user
        User::factory()->make(['email' => 'admin@admin.com', 'password' => bcrypt('password123')]);

        // Go to /login
        $response = $this->post('/login', ['email' => 'admin@admin.com', 'password' => 'password123']);

        // Redirect to /
        $response->assertStatus(302);
        $response->assertRedirect('/');

    }

    public function test_authenticated_user_can_access_homepage()
    {
        // Create a fake user
        $user = User::factory()->make(['email' => 'admin@admin.com', 'password' => bcrypt('password123')]);

        // Go to / as an authenticated user
        $response = $this->actingAs($user)->get('/');
        $response->assertStatus(200);
    }

    public function test_unauthenticated_user_cannot_access_homepage()
    {
        // Go to / as an unauthenticated user
        $response = $this->get('/');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }
}
