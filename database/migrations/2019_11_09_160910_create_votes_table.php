<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->integer('userId')->unsigned();
            $table->integer('ideaId')->unsigned();
            $table->boolean('up');                  /* Upvoted if set to true, else Downvoted */

            $table->foreign('ideaId')->references('id')->on('ideas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('votes', function (Blueprint $table) {
            $table->dropForeign('ideaId');
        });

        Schema::dropIfExists('votes');
    }
}