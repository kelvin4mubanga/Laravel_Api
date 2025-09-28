<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Funding;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CrowdfundingControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_all_fundings_on_index()
    {
        Funding::factory()->count(3)->create();

        $response = $this->getJson('/api/fundings');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    /** @test */
    public function it_creates_a_funding_on_store()
    {
        $fundingData = Funding::factory()->make()->toArray();

        $response = $this->postJson('/api/fundings', $fundingData);

        $response->assertStatus(201)
                 ->assertJsonFragment($fundingData);

        $this->assertDatabaseHas('fundings', $fundingData);
    }

    /** @test */
    public function it_returns_a_single_funding_on_show()
    {
        $funding = Funding::factory()->create();

        $response = $this->getJson("/api/fundings/{$funding->id}");

        $response->assertStatus(200)
                 ->assertJson([
                    'id' => $funding->id,
                    // Add other relevant fields as needed
                 ]);
    }

    /** @test */
    public function it_updates_a_funding_on_update()
    {
        $funding = Funding::factory()->create();

        $updateData = ['title' => 'Updated Title'];  // Adjust fields based on your model

        $response = $this->putJson("/api/fundings/{$funding->id}", $updateData);

        $response->assertStatus(200)
                 ->assertJsonFragment($updateData);

        $this->assertDatabaseHas('fundings', $updateData + ['id' => $funding->id]);
    }

    /** @test */
    public function it_deletes_a_funding_on_destroy()
    {
        $funding = Funding::factory()->create();

        $response = $this->deleteJson("/api/fundings/{$funding->id}");

        $response->assertStatus(204);

        $this->assertDatabaseMissing('fundings', ['id' => $funding->id]);
    }
}