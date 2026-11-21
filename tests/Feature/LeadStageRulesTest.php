<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LeadStageRulesTest extends TestCase
{
    use RefreshDatabase;

    public function test_invalid_stage_is_rejected(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post(route('leads.store'), [
            'name' => 'Nisha',
            'phone' => '0771234567',
            'email' => 'nisha@test.com',
            'course' => 'ICT',
            'stage' => 'LoosuStage', // ithu thappu
        ]);

        $response->assertSessionHasErrors('stage');
        $this->assertDatabaseCount('leads', 0);
    }

    public function test_valid_stage_is_allowed(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post(route('leads.store'), [
            'name' => 'Nisha',
            'phone' => '0771234567',
            'email' => 'nisha@test.com',
            'course' => 'ICT',
            'stage' => 'Contacted', // ithu correct
        ]);

        $response->assertSessionHasNoErrors();
        $this->assertDatabaseCount('leads', 1);
    }
}
