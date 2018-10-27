<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('age');
            $table->string('gender');
            $table->string('country');
            $table->text('address');
            $table->string('national_id');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->integer('days')->nullable();
            $table->float('bullets')->nullable();
          //  $table->integer('id_points')->unsigned();
           // $table->foreign('id_points')->references('id')->on('points')->onDelete( 'cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
