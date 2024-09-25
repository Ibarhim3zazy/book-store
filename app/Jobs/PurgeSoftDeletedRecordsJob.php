<?php

namespace App\Jobs;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Spatie\Permission\Models\Role;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class PurgeSoftDeletedRecordsJob implements ShouldQueue
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
        // Define the time period after which records should be deleted permanently (e.g., 30 days)
        $days = 30;

        // Fetch soft-deleted records older than the specified time period and permanently delete them
        Role::onlyTrashed()
            ->where('deleted_at', '<=', Carbon::now()->subDays($days))
            ->forceDelete();
    }
}
