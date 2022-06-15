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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('timeslot_id')->constrained();
            $table->date('date');
            $table->boolean('has_haircut')->default(false);
            // $table->dateTime('start_at');
            // $table->dateTime('finish_at');
            $table->timestamps();
        });
        Schema::create('appointment_treatment', function (Blueprint $table){
            $table->foreignId('appointment_id')->constrained();
            $table->foreignId('treatment_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
