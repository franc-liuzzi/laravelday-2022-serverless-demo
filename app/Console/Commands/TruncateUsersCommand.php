<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class TruncateUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:truncate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::destroy(User::all(['id']));
        return Command::SUCCESS;
    }
}
