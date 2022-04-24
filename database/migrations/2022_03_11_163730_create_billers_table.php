<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{  
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('biller_image');
            $table->string('company_name');
            $table->string('vat_num');
            $table->string('email');
            $table->string('Phone');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('country');
            $table->string('district');
            $table->string('thana');
            $table->string('postal');
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
        Schema::dropIfExists('billers');
    }
};
