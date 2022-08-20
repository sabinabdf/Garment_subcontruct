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
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->text('company_bio');
            $table->text('company_profile_one');
            $table->text('company_profile_two')->nullable();
            $table->string('trade_license');
            $table->text('logo')->nullable();
            $table->jsonb('certificates')->nullable();
            $table->string('phone',15);
            $table->text('map')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('photo')->nullable();
            $table->integer('machine_post_limits');
            $table->integer('work_post_limits');
            $table->enum('status', ['active', 'inactive','pending'])->default('pending');
            $table->rememberToken();
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
        Schema::dropIfExists('companies');
    }
};
