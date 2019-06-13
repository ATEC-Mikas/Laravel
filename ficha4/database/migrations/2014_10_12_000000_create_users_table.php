<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('city_id')->nullable();
            $table->string('transportation')->nullable();
            $table->integer('travelavg')->nullable();
            $table->integer('city_pref_id')->nullable();
            $table->boolean('admin')->default(false);
            $table->boolean('answered')->default(false);
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('city_pref_id')->references('id')->on('cities');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
