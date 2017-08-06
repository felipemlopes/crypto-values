<?php

use Illuminate\Database\Seeder;

class CoinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $btc = App\Coin::firstOrCreate([
        	'currency_symbol' => 'btc',
        	'currency_name' => 'Bitcoin',
        ]);

        $eth = App\Coin::firstOrCreate([
        	'currency_symbol' => 'eth',
        	'currency_name' => 'Ethereum',
        ]);
    }
}
