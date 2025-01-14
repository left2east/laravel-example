<?php

namespace App\Console\Commands;

use App\Models\Test as ModelsTest;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        ModelsTest::create(['name' => 'test' . time(), 'cdate' => date('Y-m-d')]);
        $this->info('Test created successfully');
    }
}
