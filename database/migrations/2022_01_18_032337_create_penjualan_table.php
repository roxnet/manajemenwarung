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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_barang')->nullable();
            $table->unsignedInteger('id_pelayan')->nullable();
            $table->unsignedBigInteger('id_pembayaran')->nullable();
            $table->string('satuan');
            $table->date('tanggal');
            $table->integer('harga_barang');
            $table->integer('jml_beli');
            $table->integer('total_harga');
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barang');
            $table->foreign('id_pelayan')->references('id')->on('users');
            $table->foreign('id_pembayaran')->references('id')->on('pembayaran');

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
