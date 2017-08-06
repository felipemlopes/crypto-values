<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('currency')->unsigned();
            $table->foreign('currency')->references('id')->on('coins');
            $table->float('value');
            $table->dateTime('fetched_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coin_entries');
    }
}
