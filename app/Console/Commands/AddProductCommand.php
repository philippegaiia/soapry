<?php

namespace App\Console\Commands;

use App\Product;
use Illuminate\Console\Command;

class AddProductCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'soapfactory:product {name} {code?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add anew product';

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
        $product = Product::create([
            'code' => $this->argument('code') ?? 'N/A',
            'name' =>  $this->argument('name'),
        ]);

        $this->info('Added: ' . $product->name);
    }
}
