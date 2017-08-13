<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscribersController extends Controller
{
    public function store(Request $request)
    {
    	$subscriber = Subscriber::firstOrCreate(['email' => $request->input('email')]);
    	return json_encode($subscriber);
    }
}
