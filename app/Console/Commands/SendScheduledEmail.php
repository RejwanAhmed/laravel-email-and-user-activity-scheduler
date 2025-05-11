<?php

namespace App\Console\Commands;

use App\Mail\QuoteMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendScheduledEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-scheduled-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Quote Mail';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::to('test@example.com')->send(new QuoteMail());
    }
}
