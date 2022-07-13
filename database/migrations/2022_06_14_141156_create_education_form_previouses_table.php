<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationFormPreviousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_form_previouses', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('education_form_id');
            $table->string('of_gd')->nullable();
            $table->string('name')->nullable();
            $table->string('om')->nullable();
            $table->string('current_function')->nullable();
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
        Schema::dropIfExists('education_form_previouses');
    }
}
