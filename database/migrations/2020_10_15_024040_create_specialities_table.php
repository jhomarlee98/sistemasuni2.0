<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialities', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('nick',255);
            $table->text('description');
            $table->integer('number');
            $table->double('price', 8,2)->default(0.00);
            $table->string('image',255);
            $table->string('url',255);
            $table->string('icon',255)->default('fas fa-tools');
            $table->enum('tipe',['cursos','workshops','certificaciones-internacionales','otro'])->default('cursos');
            $table->string('color',255)->default('blue');
            $table->enum('state',['active','inactive'])->default('inactive');
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
        Schema::dropIfExists('specialities');
    }
}
