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
            $table->bigIncrements('id');
            $table->string('title', 150);
            $table->string('description', 1024);
            $table->string('image', 100);
            $table->float('price');
            $table->integer('stock');
        });


        //category_product
        Schema::create('category_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('category_id');
            $table->string('name', 50);

            $table->unique(['category_id', 'product_id']);

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_product', function (Blueprint $table) {
            $table->dropForeign('category_id');
            $table->dropForeign('product_id');
        });

        Schema::dropIfExists('category_product');
        Schema::dropIfExists('products');
    }
}
