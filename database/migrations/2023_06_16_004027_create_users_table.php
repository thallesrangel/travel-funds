<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_type_id')->unsigned();
            $table->integer('agency_id')->nullable()->unsigned();
            $table->string('document')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('deleted')->default('0');
            $table->timestamps();
        });

        Schema::table('users', function($table) {
            $table->foreign('user_type_id')->references('id')->on('user_type')->onDelete('cascade');
        });

        Schema::table('users', function($table) {
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
        Schema::dropIfExists('users');
    }
}
