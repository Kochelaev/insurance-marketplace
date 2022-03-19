<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->char('status', 1)->default('O');
            $table->timestamps();

            $table->softDeletes();

            $table->index('product_id', 'product_users_product_idx');
            $table->foreign('product_id', 'product_users_product_fk')->on('products')->references('id');

            $table->index('user_id', 'product_users_user_idx');
            $table->foreign('user_id', 'product_users_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_users');
    }
}
