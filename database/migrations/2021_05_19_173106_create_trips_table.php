<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('paese', 30);
            $table->string('città', 30);
            $table->tinyInteger('durata');
            $table->boolean('all_inclusive');
            $table->smallInteger('prezzo');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
