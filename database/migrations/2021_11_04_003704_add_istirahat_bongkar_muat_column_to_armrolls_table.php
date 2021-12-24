<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIstirahatBongkarMuatColumnToArmrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('armrolls', function (Blueprint $table) {
            $table->integer('istirahat')->unsigned()->after('volume');
            $table->integer('muat')->unsigned()->after('istirahat');
            $table->integer('bongkar')->unsigned()->after('muat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('armrolls', function (Blueprint $table) {
            //
        });
    }
}
