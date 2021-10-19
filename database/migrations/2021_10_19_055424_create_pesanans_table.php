<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (Schema::hasTable('pesanans')) {
            return;
        }

        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli');
            $table->string('nama_barang');
            $table->integer('qty');
            $table->date('tgl_pesan');
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
        Schema::dropIfExists('pesanans');
    }
}
