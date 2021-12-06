<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('symbol');
            $table->double('price')->nullable();
            $table->double('beta')->nullable();
            $table->string('volAvg')->nullable();
            $table->string('mktCap')->nullable();
            $table->double('lastDiv')->nullable();
            $table->string('range')->nullable();
            $table->double('changes')->nullable();
            $table->string('companyName')->nullable();
            $table->string('currency')->nullable();
            $table->string('cik')->nullable();
            $table->string('isin')->nullable();
            $table->string('cusip')->nullable();
            $table->string('exchange')->nullable();
            $table->string('exchangeShortname')->nullable();
            $table->string('industry')->nullable();
            $table->string('website')->nullable();
            $table->text('description')->nullable();
            $table->string('ceo')->nullable();
            $table->string('sector')->nullable();
            $table->string('country')->nullable();
            $table->string('fullTimeEmployees')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->double('dcfDiff')->nullable();
            $table->double('dcf')->nullable();
            $table->string('image')->nullable();
            $table->string('ipoDate')->nullable();
            $table->boolean('defaultImage')->nullable();
            $table->boolean('isEtf')->nullable();
            $table->boolean('isActivelyTrading')->nullable();
            $table->boolean('isAdr')->nullable();
            $table->boolean('isFund')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
