<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteARecord extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showLog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a record in DB';

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
        error_log("DMK");
    }
}
