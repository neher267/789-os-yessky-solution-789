<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('created_by');
            $table->string('city_id', 100);
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->text('address_line_1');
            $table->text('address_line_2');
            $table->string('business_phone');
            $table->string('postal_code');            
            $table->string('business_phone_extension')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('icao')->nullable();
            $table->string('website')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('operators');
    }
}
