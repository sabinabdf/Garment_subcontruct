<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobfiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jobschedule_id');
            $table->foreign('jobschedule_id')->references('id')->on('jobschedules')->onUpdate('cascade')->onDelete('cascade');
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
            $table->string('feedback')->nullable();
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
        Schema::dropIfExists('jobfiles');
    }
};
