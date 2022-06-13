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
        Schema::create('register_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->text('contact')->nullable();
            $table->text('mandal')->nullable();
            $table->text('village')->nullable();
            $table->text('address')->nullable();
            $table->text('sscyearofpass')->nullable();
            $table->text('sscpercentage')->nullable();
            $table->text('interyearofpass')->nullable();
            $table->text('interpercentage')->nullable();
            $table->enum('qualification', ['Degree','Engineering','Other']);
            $table->text('graduationstream')->nullable();
            $table->text('graduationyearofpass')->nullable();
            $table->text('graduationpercentage')->nullable();
            $table->text('postgraduationyearofpass')->nullable();
            $table->text('postgraduationpercentage')->nullable();
            $table->text('trainings')->nullable();
            $table->string('resume')->nullable();
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
        Schema::dropIfExists('register_models');
    }
};
