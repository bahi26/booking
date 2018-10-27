<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCobonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->string('name');
            $table->string('type');
            $table->float('discount');

            $table->date('expired')->nullable();
            $table->integer('time_of_use')->nullable();
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
        Schema::dropIfExists('cobons');
    }
}
