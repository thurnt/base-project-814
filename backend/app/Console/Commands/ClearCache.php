<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearCache extends Command
{
    protected $signature = 'cache:clear-all';
    protected $description = 'Clear all Laravel caches';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Clearing Laravel cache...');
        $this->call('cache:clear');
        $this->call('config:cache');
        $this->call('route:cache');
        $this->call('view:clear');
        $this->info('Cache cleared!');
    }
}
