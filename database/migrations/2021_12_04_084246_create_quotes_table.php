<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('symbol');
            $table->string('name')->nullable();
            $table->double('price')->nullable();
            $table->double('changesPercentage')->nullable();
            $table->double('change')->nullable();
            $table->double('dayLow')->nullable();
            $table->double('dayHigh')->nullable();
            $table->double('yearHigh')->nullable();
            $table->double('yearLow')->nullable();
            $table->string('marketcap')->nullable();
            $table->double('priceAvg50')->nullable();
            $table->double('priceAvg200')->nullable();
            $table->integer('volume')->nullable();
            $table->integer('avgVolume')->nullable();
            $table->string('exchange')->nullable();
            $table->double('open')->nullable();
            $table->double('previousClose')->nullable();
            $table->double('eps')->nullable();
            $table->double('pe')->nullable();
            $table->string('earningsAnnouncement')->nullable();
            $table->bigIncrements('sharesOutstanding')->nullable();
            $table->integer('timestamp')->nullable();
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
        Schema::dropIfExists('quotes');
    }
}
