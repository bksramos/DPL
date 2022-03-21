<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoalFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goal_forms', function (Blueprint $table) {
            $table->id();
            $table->string('division');
            $table->string('urgency');
            $table->tinyInteger('priority');
            $table->string('description');
            $table->string('unity');
            $table->tinyInteger('quantity');
            $table->float('unitary_value');
            $table->float('amount');
            $table->integer('year');
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
        Schema::dropIfExists('goal_forms');
    }
}
