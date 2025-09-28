<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

class UserRouteTest extends TestCase
{
    /** @test */
    public function it_returns_authenticated_user_with_valid_sanctum_token()
    {
        // Create a user instance
        $user = User::factory()->create();

        // Authenticate the user using Sanctum
        Sanctum::actingAs($user);

        // Hit the /user endpoint
        $response = $this->getJson('/user');

        // Assert status 200 and returned user data matches
        $response->assertStatus(200)
                 ->assertJson([
                    'id' => $user->id,
                    'email' => $user->email,
                    // add other fields you want to check
                 ]);
    }

    /** @test */
    public function it_returns_unauthorized_without_authentication()
    {
        // Hit the /user endpoint without authentication
        $response = $this->getJson('/user');

        // Assert 401 Unauthorized status
        $response->assertStatus(401);
    }
}