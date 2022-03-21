<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationFormDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_form_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('education_form_id');
            $table->longText('goals');/*inicio tabela education_details*/
            $table->longText('subject_description');
            $table->string('research_line')->nullable();
            $table->boolean('similar_course');
            $table->string('similar_course_name')->nullable();
            $table->string('similar_course_last_5_years')->nullable();
            $table->string('importance');
            $table->longText('justification');
            $table->integer('designated_id');
            $table->double('vacancies_requested',2,0);
            $table->string('prerequisites');
            $table->string('destination_after_course');
            $table->string('function_after_course');
            $table->longText('desired_training');
            $table->string('pac');/*fim tabela education_details*/
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
        Schema::dropIfExists('education_form_details');
    }
}
