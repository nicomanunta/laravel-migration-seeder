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
            $table->timestamps('departure_station');
            $table->timestamps('arrival_station');
            $table->timestamps('departure_time');
            $table->timestamps('arrival_time');
            $table->timestamps('train_code');
            $table->timestamps('number_of_carriages');
            $table->timestamps('in_time');
            $table->timestamps('deleted');
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
