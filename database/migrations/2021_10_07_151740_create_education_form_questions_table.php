<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationFormQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_form_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('education_form_id');
            $table->string('question');            
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('education_form_id')->references('id')->on('education_forms');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_form_questions');
    }
}
