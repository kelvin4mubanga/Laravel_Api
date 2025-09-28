<?php

namespace Tests\Unit;

use App\Models\funding;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FundingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_funding_model_with_fillable_attributes()
    {
        $data = [
            'time' => now(),
            'description' => 'Test funding description',
            'goal_amount' => 10000,
            'raised_amount' => 5000,
        ];

        $funding = funding::create($data);

        $this->assertInstanceOf(funding::class, $funding);
        $this->assertEquals($data['description'], $funding->description);
        $this->assertEquals($data['goal_amount'], $funding->goal_amount);
        $this->assertEquals($data['raised_amount'], $funding->raised_amount);
        $this->assertEquals($data['time'], $funding->time);
    }
}