<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialityCursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speciality_curses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_speciality');
            $table->unsignedBigInteger('id_curse');
            $table->timestamps();

            $table->foreign('id_speciality')
                ->references('id')
                ->on('specialities');

            $table->foreign('id_curse')
                ->references('id')
                ->on('curses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speciality_curses');
    }
}
