<?php

namespace App\Console\Commands;

use App\Jobs\CreateUserJob;
use Illuminate\Console\Command;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {email} {name}';

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
        CreateUserJob::dispatch(
            email: $this->argument('email'),
            name: $this->argument('name')
        );

        return Command::SUCCESS;
    }
}
