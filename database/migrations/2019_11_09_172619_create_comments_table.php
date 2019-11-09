<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 150);
            $table->string('body', 256);
            $table->integer('pictureId')->unsigned();
            $table->integer('userId')->unsigned();
            $table->timestamps();

            $table->foreign('pictureId')->references('id')->on('pictures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commentt', function (Blueprint $table) {
            $table->dropForeign('pictureId');
        });
        Schema::dropIfExists('comments');
    }
}
