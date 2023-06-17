<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('agency_id')->unsigned();
            $table->string('full_name');
            $table->date('birth');
            $table->string('sex');
            $table->string('email')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('nationality')->nullable();
            $table->string('document')->nullable();
            $table->string('passport')->nullable();
            $table->date('passport_emission')->nullable();
            $table->date('passport_expiration')->nullable();
            $table->string('location_state')->nullable();
            $table->string('location_city')->nullable();
            $table->string('location_district')->nullable();
            $table->string('location_street')->nullable();
            $table->string('location_number')->nullable();
            $table->string('location_complement')->nullable();
            $table->mediumText('description')->nullable();
            $table->integer('deleted')->default('0');
            $table->timestamps();
        });

        Schema::table('customers', function($table) {
            $table->foreign('agency_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
