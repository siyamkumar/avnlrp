<?php

namespace App\Jobs;

use App\Models\JobPosting;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class JobPostingCompletion implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $jobpostings = JobPosting::where([
            ['status', 'active'],
            ['jobPostingLastDate', '<', Carbon::today()]
        ]);
        foreach ($jobpostings as $jobposting) {
            $jobposting->status = 'completed';
            $jobposting->save();
        }
    }
}
