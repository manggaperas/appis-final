<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDumptrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dumptrucks', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->string('tahun');
            $table->integer('volume');
            $table->integer('jarak');
            $table->integer('kecepatan');
            $table->integer('waktu_tempuh');
            $table->integer('waktu_tunggu');
            $table->integer('waktu_bongkar');
            $table->integer('total_waktu_tossa');
            $table->integer('waktu_istirahat');
            $table->integer('waktu_angkut');
            $table->integer('waktu_shift');
            $table->integer('ritasi');
            $table->integer('sampah')->unsigned()->default(10);
            $table->integer('jumlah_dumptruck');
            $table->integer('jumlah_pekerja');
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
        Schema::dropIfExists('dumptrucks');
    }
}
