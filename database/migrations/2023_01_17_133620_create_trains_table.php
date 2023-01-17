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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company' , 100);
            $table->string('from', 100);
            $table->string('to', 100);
            $table->dateTime('time_of_departure',$precision = 0);
            $table->dateTime('time_of_arrival', $precision = 0);
            $table->string('lenght_of_journey', 20);
            $table->unsignedTinyInteger('stops');
            $table->string('train_number', 30);
            $table->string('train_carriage', 30);
            $table->boolean('is_on_time')->default(1);
            $table->boolean('cancelled')->default(1);
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
        Schema::dropIfExists('trains');
    }
};
