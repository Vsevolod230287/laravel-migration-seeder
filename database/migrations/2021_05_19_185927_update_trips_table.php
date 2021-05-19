<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTripsTable extends Migration
{
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->date('partenza')->after('all_inclusive');
        });
    }


    public function down()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->dropColumn('partenza');
        });
    }
}
