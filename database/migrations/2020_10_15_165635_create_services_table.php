<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('nick',255);
            $table->string('image',255);
            $table->text('description');
            $table->integer('position');
            $table->enum('state',['active','inactive'])->default('inactive');
            $table->string('icon',255)->default('fas fa-project-diagram');
            $table->string('url',255);
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
        Schema::dropIfExists('services');
    }
}
