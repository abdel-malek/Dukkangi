<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearCarts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:clearCart';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear not completed carts every 30 min';

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
