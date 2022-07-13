<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalFormMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_form_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('technical_form_id');
            $table->tinyInteger('of_amount');
            $table->string('of_title');
            $table->tinyInteger('gr_amount');
            $table->string('gr_title');
            $table->tinyInteger('cv_amount');
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('technical_form_id')->references('id')->on('technical_forms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technical_form_members');
    }
}
