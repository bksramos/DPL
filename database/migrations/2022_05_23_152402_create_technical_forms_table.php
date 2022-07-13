<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_forms', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('mission_number');
            $table->string('bilateral_activity');
            $table->string('fpab_number')->nullable();
            $table->string('mission_burden');
            $table->string('title');
            $table->string('establishment');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->date('dateline_start');
            $table->date('dateline_finish');
            $table->tinyInteger('event_duration');
            $table->tinyInteger('outward_transit');
            $table->tinyInteger('back_transit');
            $table->tinyInteger('mission_duration');
            $table->float('third_party_service');
            $table->float('mi_daily');
            $table->float('cv_daily');
            $table->float('mi_tickets');
            $table->float('cv_tickets');
            $table->float('supply_30');
            $table->float('supply_39');
            $table->longText('justifications');
            $table->longText('observations');
            $table->integer('impact');
            $table->integer('mission_type');
            $table->integer('institutional_commitments');
            $table->integer('training_systems');
            $table->integer('capacity_adherence');
            $table->integer('rh_training');
            $table->integer('bilateral');
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
        Schema::dropIfExists('technical_forms');
    }
}
