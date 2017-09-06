<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use App\CoinEntry;
use App\Coin;

class CryptoController extends Controller
{
    public function homepage() {
    	$http_client = new Client();
		$result = $http_client->get(env('API_VALUES_QUERY'))->getBody();

		$values = json_decode($result);

		foreach ($values as $coin) {
			switch ($coin->id) {
				case 'bitcoin':
					$btc_value_eur = $coin->price_eur;
					$btc_hour_change = $coin->percent_change_1h;
					$btc_day_change = $coin->percent_change_24h;
					$btc_week_change = $coin->percent_change_7d;
					break;
				case 'ethereum':
					$eth_value_eur = $coin->price_eur;
					$eth_hour_change = $coin->percent_change_1h;
					$eth_day_change = $coin->percent_change_24h;
					$eth_week_change = $coin->percent_change_7d;
					break;
			}
		}

    	return view('homepage')->with(compact('btc_value_eur', 'btc_hour_change', 'btc_day_change', 'btc_week_change'));
    }

    public function charts() {
    	return view('charts');
    }

    public function chartsEntriesAjax() {
		$entries_btc = CoinEntry::orderBy('fetched_at', 'desc')->where('currency', Coin::where('currency_symbol', 'btc')->first()->id)->take(25)->get()->reverse()->all();
        $entries_eth = CoinEntry::orderBy('fetched_at', 'desc')->where('currency', Coin::where('currency_symbol', 'eth')->first()->id)->take(25)->get()->reverse()->all();
    	return json_encode([$entries_btc, $entries_eth]);
    }
}
