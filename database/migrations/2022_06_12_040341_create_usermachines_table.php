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
        Schema::create('usermachines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('machine_id');
            $table->foreign('machine_id')->references('id')->on('machines')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->json('specifications');
            $table->integer('number_of_machine');
            $table->date('purchase_date');
            $table->text('photo');
            $table->integer('number_of_available'); 
            $table->string('brand');
            $table->enum('status', ['busy', 'available'])->default('available');
            $table->enum('approved', ['yes', 'no'])->default('no');            
           
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
        Schema::dropIfExists('usermachines');
    }
};
