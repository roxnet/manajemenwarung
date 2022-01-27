<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warung;

class WarungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warung = Warung::create([
            'nama_warung' => 'Sumber Rejeki',
            'alamat' => 'Purworejo' 
        ]);
    }
}
