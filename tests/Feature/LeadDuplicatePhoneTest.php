<?php

namespace Tests\Feature;

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LeadDuplicatePhoneTest extends TestCase
{
    use RefreshDatabase;

    public function test_duplicate_phone_is_not_allowed(): void
    {
        // 1st lead - ithu create aaganum
        Lead::create([
            'name' => 'Nisha',
            'phone' => '0771234567',
            'email' => 'nisha@test.com',
            'course' => 'ICT',
            'stage' => 'New',
        ]);

        // 2nd lead - athe phone la - ithu FAIL aaganum
        $this->expectException(\Illuminate\Database\QueryException::class);

        Lead::create([
            'name' => 'Kamal',
            'phone' => '0771234567',
            'email' => 'kamal@test.com',
            'course' => 'ICT',
            'stage' => 'New',
        ]);
    }

    public function test_different_phone_is_allowed(): void
    {
        Lead::create([
            'name' => 'Nisha',
            'phone' => '0771234567',
            'course' => 'ICT',
        ]);

        Lead::create([
            'name' => 'Kamal',
            'phone' => '0779999999',
            'course' => 'ICT',
        ]);

        $this->assertDatabaseCount('leads', 2);
    }
}
