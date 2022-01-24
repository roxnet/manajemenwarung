<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warung extends Model
{
    use HasFactory;

    protected $table = 'warung';
    protected $primaryKey = 'id';
<<<<<<< Updated upstream
    protected $guarded = [];
=======
    protected $fillable = ['nama_warung', 'alamat'];
>>>>>>> Stashed changes
}
