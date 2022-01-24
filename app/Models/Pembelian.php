<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelian';
<<<<<<< Updated upstream
    protected $primaryKey = 'id_pembelian';
    protected $guarded = [];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id_supplier');
=======
    protected $primaryKey = 'id';
    protected $fillable = ['id_barang', 'tanggal_beli', 'jml_beli'];

    public function barang()
    {
        return $this->belongsTo (Barang::class, 'id_barang', 'id_barang');
    }
    public function harga()
    {
    return $this->hasMany (Harga::class, 'id', 'id');
>>>>>>> Stashed changes
    }
}
