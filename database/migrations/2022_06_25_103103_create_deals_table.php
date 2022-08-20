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
        Schema::create('deals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('merchant_id');
            $table->foreign('merchant_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('machine_id');
            $table->foreign('machine_id')->references('id')->on('usermachines')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->json('specifications');
            $table->integer('budget');
            $table->integer('advance_amount')->default(0);
            $table->enum('advance_paid', ['yes', 'no'])->default('no');
            $table->date('deadline');
            $table->integer('quantity');
            $table->string('quality_related');
            $table->enum('status', ['active', 'inactive','pending','completed'])->default('pending');
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
        Schema::dropIfExists('deals');
    }
};
