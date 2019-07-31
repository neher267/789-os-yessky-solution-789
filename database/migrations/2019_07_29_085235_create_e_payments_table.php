<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name', 191)->nullable();
            $table->string('contact_person', 191)->nullable();
            $table->string('address', 191)->nullable();
            $table->string('city', 191)->nullable();
            $table->string('province_State', 191)->nullable();
            $table->string('country', 191)->nullable();
            $table->string('postal_zip_code', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->string('vpc_MerchTxnRef', 191)->nullable();
            $table->string('vpc_amount', 191)->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('e_payments');
    }
}
