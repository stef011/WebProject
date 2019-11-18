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
            $table->unsignedBigInteger('pictureId');
            $table->unsignedBigInteger('userId');
            $table->timestamps();

            $table->foreign('pictureId')->references('id')->on('pictures')
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
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('pictureId');
        });
        Schema::dropIfExists('comments');
    }
}