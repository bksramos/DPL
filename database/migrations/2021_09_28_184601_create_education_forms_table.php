<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_forms', function (Blueprint $table) {
            $table->id('id');/*inicio tabela education*/
            $table->string('plan');
            $table->string('mission_number');
            $table->integer('start_year');
            $table->string('pronouncing_organ');
            $table->string('pronouncing_om');
            $table->string('training_track');
            $table->string('title');
            $table->string('establishment');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->date('dateline_start');
            $table->date('dateline_finish');
            $table->string('duration');
            $table->double('workload');/*fim da tabela education */
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_forms');
    }
}
