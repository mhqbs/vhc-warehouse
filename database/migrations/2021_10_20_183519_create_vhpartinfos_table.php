<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVhpartinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vhpartinfos', function (Blueprint $table) {
            $table->id();
            $table->string('VehicleID');
            $table->string('Body');
            $table->string('FrontBumper');
            $table->string('RearBumper');
            $table->string('Grille');
            $table->string('HeadLamp');
            $table->string('FogLamp');
            $table->string('TailLamp');
            $table->string('Oil');
            $table->string('OilFilter');
            $table->string('AirCleaner');
            $table->string('Belt');
            $table->string('Engine');
            $table->string('Transmission');
            $table->string('Battery');
            $table->string('Alternator');
            $table->string('Radiator');
            $table->string('Suspensions');
            $table->string('Steering');
            $table->string('FrontBrake');
            $table->string('RearBrake');
            $table->string('Sensors');
            $table->string('AirConditioner');
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
        Schema::dropIfExists('vhpartinfos');
    }
}
