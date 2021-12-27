<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJumlahSampahColumnToDumptrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dumptrucks', function (Blueprint $table) {
            $table->integer('jumlah_sampah')->unsigned()->default(10)->after('ritasi');
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
