<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationFormFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_form_features', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('education_form_id');
            $table->integer('impact');
            $table->integer('mission_type');
            $table->integer('institutional_commitments');
            $table->integer('training_systems');
            $table->integer('capacity_adherence');
            $table->integer('rh_training');
            $table->integer('bilateral');
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
        Schema::dropIfExists('education_form_features');
    }
}
