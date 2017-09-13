<?php

namespace App\Http\Controllers;

use App\CoinEntry;
use App\Coin;

class CalculatorController extends Controller
{
    public function index() {
    	return view('trading-calculator');
    }
}
