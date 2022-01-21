<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_barang')->nullable();
            $table->unsignedBigInteger('id_pembelian')->nullable();
            $table->date('tanggal_beli');
            $table->integer('harga_ecer');
            $table->integer('harga_grosir');
            $table->integer('harga_jual');
            $table->enum('status', ['active', 'non-active']);
            $table->timestamps();
            
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->foreign('id_pembelian')->references('id')->on('pembelian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('harga');
    }
}
