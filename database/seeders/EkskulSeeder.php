<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Ekskul;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ekskul::create([
            'image' => 'eskul2.jpg',
            'tanggal' => Carbon::now(),
            'keterangan' => 'tes'
        ]);
         
    }
}
