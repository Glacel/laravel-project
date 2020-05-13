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
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('birthdayDate');
            $table->string('birthdayMonth');
            $table->string('birthdayYear');
            $table->string('contactnumber');
            $table->string('streetaddress');
            $table->string('cityaddress');
            $table->string('provinceaddress');            
            $table->rememberToken();
            $table->timestamps();
            $table->string('usertype')->nullable();
            $table->string('status');
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
