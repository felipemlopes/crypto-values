<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Carbon\Carbon;
use App\Coin;
use App\CoinEntry;

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
        $http_client = new Client();
        $result = $http_client->get(env('API_VALUES_QUERY'))->getBody();
        $values = json_decode($result);
        
        foreach ($values as $coin) {
            switch ($coin->id) {
                case 'bitcoin':
                    CoinEntry::create([
                        'currency' => Coin::where('currency_symbol', 'btc')->first()->id,
                        'value' => $coin->price_eur,
                        'fetched_at' => Carbon::now()
                    ]);
                    break;
                case 'ethereum':
                    CoinEntry::create([
                        'currency' => Coin::where('currency_symbol', 'eth')->first()->id,
                        'value' => $coin->price_eur,
                        'fetched_at' => Carbon::now()
                    ]);
                    break;
            }               
        }
    }
}
