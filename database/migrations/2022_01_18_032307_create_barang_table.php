<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('id_kategori')->constrained('kategori');
            $table->char('kd_barang');
            $table->string('nama_barang');
            $table->char('satuan');
            $table->string('kategori');
            $table->integer('stok');
            $table->integer('total_barang');
            $table->integer('harga_ecer');
            $table->integer('harga_grosir');
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
        Schema::dropIfExists('barang');
    }
}
