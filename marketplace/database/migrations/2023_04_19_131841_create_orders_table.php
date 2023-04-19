<?php

use App\Enum\Statuses;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedFloat('price')->default('0');
            $table->char('status', 1)->default(Statuses::OPEN);

            $table->timestamps();
            $table->softDeletes();

            $table->index('product_id', 'orders_product_idx');
            $table->foreign('product_id', 'orders_product_fk')->on('products')->references('id');

            $table->index('user_id', 'orders_user_idx');
            $table->foreign('user_id', 'orders_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
