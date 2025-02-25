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
        Schema::create('store_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->string('province');
            $table->string('district');
            $table->string('ward');
            $table->string('address');
            $table->longText('description');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->tinyInteger('status')->default(0);
            //1 là địa chỉ lấy hàng| 0 không
            $table->tinyInteger('pick_store')->default(0);
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
        Schema::dropIfExists('store_addresses');
    }
};
