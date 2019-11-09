<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('productId');
            $table->unsignedBigInteger('categoryId');

            $table->foreign('productId')->references('id')->on('products')
                ->onDelete('cascade');
            $table->foreign('categoryId')->references('id')->on('categories')
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
        Schema::table('products_categories', function (Blueprint $table) {
            $table->dropForeign('productId');
            $table->dropForeign('categoryId');
        });
        Schema::dropIfExists('products_categories');
    }
}
