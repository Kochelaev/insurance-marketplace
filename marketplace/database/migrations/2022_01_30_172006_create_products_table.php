<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('type_id');
            $table->text('description')->nullable();
            $table->text('coefficients');
            $table->timestamps();

            $table->softDeletes();

            $table->index('type_id', 'product_type_idx');
            $table->foreign('type_id', 'product_type_fk')->on('types')->references('id');

            $table->index('owner_id', 'product_user_idx');
            $table->foreign('owner_id', 'product_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
