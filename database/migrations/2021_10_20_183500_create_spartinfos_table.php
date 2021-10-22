<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpartinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spartinfos', function (Blueprint $table) {
            $table->id();
            $table->string('partNumber');
            $table->string('PartName');
            $table->string('PartType');
            $table->string('PartSerial');
            $table->string('PartManufacturer');
            $table->string('VehicleType');
            $table->string('PartStock');
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
        Schema::dropIfExists('spartinfos');
    }
}
