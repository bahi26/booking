<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionaires', function (Blueprint $table) {
            $table->increments('id');
            $table->text('question_one');
            $table->text('question_two');
            $table->text('question_three');
            $table->text('question_four');
            $table->text('question_five');
            $table->text('question_six');
            $table->text('question_seven');
            $table->text('question_eight');
            $table->text('question_nine');
            $table->text('question_ten');
            $table->text('question_eleven');
            $table->text('question_twelve');
            $table->text('question_thirteen');
            $table->text('question_fourteen');
            $table->text('question_fifteen');
            $table->text('question_sixteen');
            $table->text('question_seventeen');

            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('bookings')->onDelete('cascade');
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
        Schema::dropIfExists('questionaires');
    }
}
