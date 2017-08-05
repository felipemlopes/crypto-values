<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FetchValues extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crypto:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch most recent values for Bitcoin and Ethereum and save them in the database.';

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
     * @return mixed
     */
    public function handle()
    {
        
    }
}
