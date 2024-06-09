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
        Schema::create('variant', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('name');
            $table->string('status');
            $table->timestamps();
           
        });
        
        Schema::table('variant',function(Blueprint $table)
        {
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
         Schema::table('variant',function(Blueprint $table)
        {
            $table->dropSoftDeletes();
        });
    }
};
