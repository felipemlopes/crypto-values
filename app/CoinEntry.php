<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinEntry extends Model
{
	protected $fillable = ['currency', 'value', 'fetched_at'];   
}
