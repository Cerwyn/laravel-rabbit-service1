<?php

namespace App\Console\Commands;

use App\Jobs\UserDeleted;
use Illuminate\Console\Command;

class UserDeleteJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user-delete:job';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        UserDeleted::dispatch(['user_id' => 1]);
    }
}
