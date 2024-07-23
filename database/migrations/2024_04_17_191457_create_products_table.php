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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->text('image');
            $table->integer('qty');
            $table->double('price');
            $table->double('offer_price')->nullable();
            $table->date('offer_start_date')->nullable();
            $table->date('offer_end_date')->nullable();
            $table->string('sku', 255)->nullable();
            $table->text('video_link')->nullable();
            $table->longText('long_description');
            $table->longText('short_description');
            $table->longText('specifications')->nullable();
            $table->string('product_type', 255)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('seo_title', 255)->nullable();
            $table->string('promotion', 255)->nullable();
            $table->text('seo_description')->nullable();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->double('weight');
            $table->integer('views')->default(0);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('sub_category_id')->nullable()->unsigned()->index();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->bigInteger('child_category_id')->nullable()->unsigned()->index();
            $table->foreign('child_category_id')->references('id')->on('child_categories')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
