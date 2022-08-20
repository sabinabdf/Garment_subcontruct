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
        Schema::create('deliveryrequests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('deal_id');
            $table->foreign('deal_id')->references('id')->on('deals')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('merchant_id');
            $table->foreign('merchant_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('merchant_approval', ['yes', 'no'])->default('no');
            $table->enum('seller_approval', ['yes', 'no'])->default('no');
            $table->unsignedBigInteger('deliveryman_id')->nullable();
            $table->foreign('deliveryman_id')->references('id')->on('deliverymans')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('deliveryrequests');
    }
};
