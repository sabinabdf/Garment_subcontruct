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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('workorder_id')->unsigned(); 
            $table->foreign('workorder_id')->references('id')->on('workorders')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('machinepost_id')->unsigned(); 
            $table->foreign('machinepost_id')->references('id')->on('machineposts')->onUpdate('cascade')->onDelete('cascade'); 
            $table->bigInteger('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->bigInteger('budget');
            $table->date('deadline');
            $table->bigInteger('quantity');
            $table->string('quality_related');
            $table->text('message');
            $table->enum('take_up',['Pending','Accept','Rejected'])->default('Pending');
            $table->enum('status',['active','inactive','pending'])->default('pending');
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
        Schema::dropIfExists('proposals');
    }
};
