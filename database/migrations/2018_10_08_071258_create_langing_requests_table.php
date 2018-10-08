<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangingRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langing_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_id')->unsigned();
            $table->string('flightPlan')->nullable();
            $table->string('ospAgent');
            $table->string('aocValidity')->nullable();
            $table->string('corValidity')->nullable();
            $table->string('coaValidity')->nullable();
            $table->string('insuranceValidity')->nullable();
            $table->string('goingDepDate');
            $table->string('goingEtdUtc');
            $table->string('goingDepFrom');
            $table->string('goingArrDate');
            $table->string('goingAtaUtc');
            $table->string('goingArrTo');
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
        Schema::dropIfExists('langing_requests');
    }
}
