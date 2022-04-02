<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class OrderCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new order with random data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Order::factory(1)->withRandomNumberOfProducts(1,4)->create();

        return 0;
    }
}
