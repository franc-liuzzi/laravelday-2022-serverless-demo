<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CacheSetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:set {key} {value}';

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
        if (cache()->set($this->argument('key'), $this->argument('value'))) {
            $this->info('Cache key successfully set');

            return Command::SUCCESS;
        } else {
            $this->error('Error setting cache key');

            return Command::FAILURE;
        }
    }
}
