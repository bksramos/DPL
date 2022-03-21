<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationFormFinances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_form_finances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('education_form_id');
            $table->float('cost_help');
            $table->float('salary');
            $table->float('housing_assistance');
            $table->float('baggage_transport');
            $table->float('daily');
            $table->float('personal_transport_1');
            $table->float('personal_transport_2');
            $table->float('course_cost');
            $table->float('total_annual');
            $table->tinyInteger('course_year');
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
        Schema::dropIfExists('education_form_finances');
    }
}
