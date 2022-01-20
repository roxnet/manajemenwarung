<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->foreign('id_pelayan')->references('id')->on('pelayan');
            $table->foreign('id_pembayaran')->references('id')->on('pembayaran');
            $table->varchar('satuan');
            $table->date('tanggal');
            $table->integer('harga_barang');
            $table->integer('jml_beli');
            $table->integer('total_harga');
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
        Schema::dropIfExists('penjualan');
    }
}
