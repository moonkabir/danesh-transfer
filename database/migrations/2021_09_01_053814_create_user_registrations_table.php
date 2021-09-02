<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('sender_id')->nullable();
            $table->string('title')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('lname')->nullable();
            $table->string('phno')->nullable();
            $table->string('phno_2')->nullable();
            $table->string('address')->nullable();
            $table->string('bdate')->nullable();;
            $table->string('id_type')->nullable();
            $table->string('aus_driver_id_number')->nullable();
            $table->string('aus_driver_issuing_jurisdictions')->nullable();
            $table->string('aus_driver_expiry')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('passport_issuing_date')->nullable();
            $table->string('passport_issuing_jurisdictions')->nullable();
            $table->string('passport_expiry')->nullable();
            $table->string('occupation')->nullable();
            $table->string('country_of_birth')->nullable();
            $table->string('Nationality')->nullable();
            $table->string('aus_driver_license_front')->nullable();
            $table->string('aus_driver_license_back')->nullable();
            $table->string('passport_image')->nullable();
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
        Schema::dropIfExists('user_registrations');
    }
}
