<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBulanTahunColumnToDumptrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dumptrucks', function (Blueprint $table) {
            $table->integer('bulan')->unsigned()->default(10)->after('id');
            $table->integer('tahun')->unsigned()->default(10)->after('bulan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dumptrucks', function (Blueprint $table) {
            //
        });
    }
}
