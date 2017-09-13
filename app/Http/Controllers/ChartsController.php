<?php

namespace App\Http\Controllers;

use App\CoinEntry;
use App\Coin;

class ChartsController extends Controller
{
    public function index() {
    	return view('charts');
    }

    public function chartsEntriesAjax() {
		$entries_btc = CoinEntry::orderBy('fetched_at', 'desc')->where('currency', Coin::where('currency_symbol', 'btc')->first()->id)->take(25)->get()->reverse()->all();
        $entries_eth = CoinEntry::orderBy('fetched_at', 'desc')->where('currency', Coin::where('currency_symbol', 'eth')->first()->id)->take(25)->get()->reverse()->all();
    	return json_encode([$entries_btc, $entries_eth]);
    }
}
