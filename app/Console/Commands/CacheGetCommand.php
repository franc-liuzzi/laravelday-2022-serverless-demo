<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CacheGetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:get {key}';

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
        $key = $this->argument('key');

        if (cache()->has($key)) {
            $value = cache()->get($key);
            $this->info("Value for $key is $value");

            return Command::SUCCESS;
        } else {
            $this->error("There isn't any value for key $key");
            
            return Command::FAILURE;
        }
        
    }
}
