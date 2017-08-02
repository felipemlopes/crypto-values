<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

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
}
