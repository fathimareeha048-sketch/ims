<?php

namespace Tests\Feature;

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Carbon\Carbon;

class LeadOverdueFollowUpTest extends TestCase
{
    use RefreshDatabase;

    public function test_past_follow_up_date_is_overdue(): void
    {
        Lead::create([
            'name' => 'Hafrin',
            'phone' => '0771111111',
            'course' => 'ICT',
            'stage' => 'New',
            'follow_up_date' => Carbon::yesterday()->toDateString(),
        ]);

        $overdue = Lead::where('follow_up_date', '<', Carbon::today())
            ->whereNotIn('stage', ['Enrolled', 'Lost'])
            ->get();

        $this->assertCount(1, $overdue);
    }

    public function test_future_follow_up_date_is_not_overdue(): void
    {
        Lead::create([
            'name' => 'Reeha',
            'phone' => '0772222222',
            'course' => 'ICT',
            'stage' => 'New',
            'follow_up_date' => Carbon::tomorrow()->toDateString(),
        ]);

        $overdue = Lead::where('follow_up_date', '<', Carbon::today())
            ->whereNotIn('stage', ['Enrolled', 'Lost'])
            ->get();

        $this->assertCount(0, $overdue);
    }

    public function test_enrolled_lead_is_not_overdue_even_if_date_passed(): void
    {
        Lead::create([
            'name' => 'Anu',
            'phone' => '0773333333',
            'course' => 'ICT',
            'stage' => 'Enrolled',
            'follow_up_date' => Carbon::yesterday()->toDateString(),
        ]);

        $overdue = Lead::where('follow_up_date', '<', Carbon::today())
            ->whereNotIn('stage', ['Enrolled', 'Lost'])
            ->get();

        $this->assertCount(0, $overdue);
    }
}
