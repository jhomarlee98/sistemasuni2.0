<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curses', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('nick',255);
            $table->text('description');
            $table->double('price',8,2);
            $table->string('image',255);
            $table->string('url',255);
            $table->string('pdf',255);
            $table->string('time',255);
            $table->string('tipe',255)->default('curso');
            $table->string('tags',255)->default('curso libre');
            $table->string('icon',255)->default('fas fa-book');
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
        Schema::dropIfExists('curses');
    }
}
