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
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();            //  Убрать лишние nulable позже
            $table->string('middlename')->nullable();
            $table->char('role', 1)->default('U');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('company')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->date('birthdate')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('adress')->nullable();
            $table->string('INN')->nullable();
            $table->timestamps();

            $table->softDeletes();

            $table->index('city_id', 'user_city_idx');
            $table->foreign('city_id', 'user_city_fk')->on('cities')->references('id');
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
