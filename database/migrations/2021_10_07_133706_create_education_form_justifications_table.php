<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationFormJustificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_form_justifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('education_form_id');
            $table->longText('detailed_justification');
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
        Schema::dropIfExists('education_form_justifications');
    }
}
