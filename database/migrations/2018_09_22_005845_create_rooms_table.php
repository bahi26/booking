<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->string('type');
            $table->integer('number_of_beds');
            $table->float('cost_per_week_egy');
            $table->float('cost_per_2week_egy');
            $table->float('cost_per_3week_egy');
            $table->float('cost_per_4week_egy');
            $table->float('cost_per_weekend_egy');
            $table->float('cost_per_week_dol');
            $table->float('cost_per_2week_dol');
            $table->float('cost_per_3week_dol');
            $table->float('cost_per_4week_dol');
            $table->float('cost_per_weekend_dol');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
