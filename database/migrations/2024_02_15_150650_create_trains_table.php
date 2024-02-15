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
            $table->string('agency', 50);
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->timestamp('departure_time');
            $table->timestamp('arrival_time');
            $table->string('train_code');
            $table->integer('number_of_carriages');
            $table->boolean('in_time');
            $table->boolean('deleted')->default(false);
        
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
