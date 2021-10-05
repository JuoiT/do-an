<?php

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
            $table->bigInteger('user_id')->unsigned();
            $table->string('name', 255)->unsigned();
            $table->string('phone', 255)->unsigned();
            $table->string('email', 255)->unsigned();
            $table->string('address', 255)->unsigned();
            $table->bigInteger('payment_id')->unsigned();
            $table->bigInteger('ship_id')->unsigned();
            $table->bigInteger('coupon_id')->unsigned()->nullable();
            $table->double('total_price');
            $table->integer('quantity')->unsigned();
            $table->tinyInteger('status')->default(1);
            $table->text('description')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('ship_id')->references('id')->on('ships');
            $table->foreign('coupon_id')->references('id')->on('coupons');
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
