<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $fillable = ['currency_symbol', 'currency_name'];
}
