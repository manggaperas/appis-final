<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     *  
     * RESTRICT adalah jika kita menghapus atau merubah baris data dalam tabel A maka tidak akan diperbolehkan jika pada tabel B masih ditemukan relasi datanya. InnoDB dapat menolak perintah perubahan atau penghapusan tersebut.

     * CASCADE adalah jika kita menghapus atau merubah baris data dalam tabel A secara otomatis akan menghapus atau merubah baris yang sesuai dalam tabel B.

     * SET NULL adalah jika kita menghapus atau merubah baris data dalam tabel A secara otomatis akan merubah baris pada tabel B menjadi NULL pada kolom yang *terelasi. Hal ini dapat dilakukan jika kolom foreign key tidak memiliki pengaturan NOT NULL.

     * NO ACTION dalam standar SQL, NO ACTION berarti tidak merubah apapun pada tabel anak jika kita merubah data pada salah satu tabelnya.
     */
    public function up()
    {

        //Main FK
        Schema::table('armrolls', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('SET NULL')
                ->onUpdate('cascade');
        });

        Schema::table('containers', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('SET NULL')
                ->onUpdate('cascade');
        });

        Schema::table('dumptrucks', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('SET NULL')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        //Main FK
        Schema::table('armrolls', function (Blueprint $table) {
            $table->dropForeign('armrolls_user_id_foreign');
        });

        Schema::table('containers', function (Blueprint $table) {
            $table->dropForeign('containers_user_id_foreign');
        });

        Schema::table('dumptrucks', function (Blueprint $table) {
            $table->dropForeign('dumptrucks_user_id_foreign');
        });
    }
}
