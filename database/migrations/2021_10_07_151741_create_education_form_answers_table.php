<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationFormAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_form_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('description_question_id');
            $table->string('answer');
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('description_question_id')->references('id')->on('education_form_questions');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_form_answers');
    }
}
