<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Helper\Table;

class CreateBasketLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_lines', function (Blueprint $table) {
            $table->integer('userId')->unsigned();
            $table->unsignedBigInteger('productId');

            $table->foreign('productId')
                ->references('id')
                ->on('products')
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
        Schema::table('basket_lines', function (Blueprint $table) {
            $table->dropForeign('productId');
        });
        Schema::dropIfExists('basket_lines');
    }
}
