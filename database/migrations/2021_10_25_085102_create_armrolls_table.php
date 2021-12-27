<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armrolls', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->string('tahun');
            $table->bigInteger('kecepatan');
            $table->bigInteger('jarak');
            $table->integer('istirahat')->unsigned();
            $table->integer('muat')->unsigned();
            $table->integer('bongkar')->unsigned();
            $table->integer('shift')->unsigned();
            $table->float('ritasi')->nullable();
            $table->bigInteger('jumlah_armroll')->nullable();
            $table->float('sampah')->unsigned();
            $table->float('volume')->unsigned();
            $table->integer('waktu_perjalanan')->unsigned()->nullable();
            $table->integer('jumlah_kontainer')->nullable();
            $table->integer('jumlah_pekerja')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
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
        Schema::dropIfExists('armrolls');
    }
}
