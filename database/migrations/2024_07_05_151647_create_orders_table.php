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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('order_code')->unique();
            $table->string('vnp_order_code');
            $table->string('vnp_transaction_id')->nullable(); // // vnpay
            $table->string('vnp_bank_code')->nullable(); // vnpay
            $table->enum('vnp_refund_status', ['Pending', 'Processing', 'Refunded', 'Refund_Failed'])->nullable();
            $table->string('tracking_id')->nullable(); // GHTK
            $table->string('order_name');
            $table->string('order_phone',20);
            $table->string('order_email');
            $table->string('order_address')->nullable();
            $table->double('total');
            $table->double('ship_money')->nullable();
            $table->string('store_address')->nullable();
            $table->double('qty_total');
            $table->string('payment_method');
            $table->integer('payment_status');
            $table->text('shipping_method');
            $table->string('coupon')->nullable();
            $table->tinyInteger('order_status')->default(0);
            $table->text('admin_note')->nullable();
            $table->text('user_note')->nullable();
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
