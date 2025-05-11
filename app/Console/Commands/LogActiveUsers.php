<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LogActiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log-active-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Logs active users to a custom log file';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // For example, get the latest active users (mocked here)
        $activeUsers = ['Alice', 'Bob', 'Charlie'];

        $message = "[" . now() . "] Active Users: " . implode(', ', $activeUsers);

        // Log to a custom file
        \Log::build([
            'driver' => 'single',
            'path' => storage_path('logs/active_users.log'),
        ])->info($message);

        $this->info('Active users logged.');
    }
}
