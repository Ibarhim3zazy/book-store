<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\PurgeSoftDeletedRecordsJob;

class DispatchPurgeSoftDeletedRecordsJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch:purge-soft-deleted';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatch a job to permanently delete soft-deleted records after a specified time';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Dispatch the job
        PurgeSoftDeletedRecordsJob::dispatch();

        $this->info('PurgeSoftDeletedRecordsJob dispatched successfully.');

        return 0;
    }
}
