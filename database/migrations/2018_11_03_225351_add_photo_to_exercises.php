<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhotoToExercises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */

    public function up()
    {
        Schema::table('exercises', function($table) {
            $table->longText('description');
            $table->string('photo');
            $table->string('video');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exercises', function($table) {
            $table->dropCulomn('description');
            $table->dropCulomn('photo');
            $table->dropCulomn('video');
        });
    }
}
