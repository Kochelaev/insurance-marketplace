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
            $table->id();
            $table->string('name');  //логин для регистрации
            $table->string('lastname')->nullable();             //
            $table->string('firstname')->nullable();            //  Убрать nulable позже
            $table->string('middlename')->nullable();           //
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('company')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('city')->nullable();
            $table->string('adress')->nullable();
            $table->timestamps();

            $table->softDeletes();
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
