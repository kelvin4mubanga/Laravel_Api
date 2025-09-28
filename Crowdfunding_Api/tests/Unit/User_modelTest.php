<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_user_with_fillable_attributes()
    {
        $data = [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => 'password123', // will be hashed automatically
        ];

        $user = User::create($data);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($data['name'], $user->name);
        $this->assertEquals($data['email'], $user->email);

        // Password is hashed, so it shouldn't equal the plain text password
        $this->assertNotEquals($data['password'], $user->password);
        $this->assertTrue(password_verify($data['password'], $user->password));
    }

    /** @test */
    public function password_and_remember_token_are_hidden_in_serialization()
    {
        $user = User::factory()->create();

        $array = $user->toArray();

        $this->assertArrayNotHasKey('password', $array);
        $this->assertArrayNotHasKey('remember_token', $array);
    }

    /** @test */
    public function it_casts_email_verified_at_to_datetime_and_password_is_hashed()
    {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $this->assertInstanceOf(\Illuminate\Support\Carbon::class, $user->email_verified_at);

        // Password is hashed automatically by the cast
        $this->assertTrue(password_verify('password', $user->getRawOriginal('password')));
    }
}