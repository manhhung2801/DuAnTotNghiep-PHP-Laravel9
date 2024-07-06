<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('order_name');
            $table->string('order_phone',20);
            $table->string('order_email');
            $table->string('order_province');
            $table->string('order_district');
            $table->string('order_ward');
            $table->double('total');
            $table->double('qty_total');
            $table->string('payment_method');
            $table->integer('payment_status');
            $table->text('order_address')->nullable();
            $table->text('shipping_method');
            $table->string('coupon')->nullable();
            $table->tinyInteger('order_status')->default(0);
            $table->text('admin_note')->nullable();
            $table->text('user_note')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
};
