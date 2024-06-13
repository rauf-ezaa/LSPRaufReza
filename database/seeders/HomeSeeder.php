<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Home;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::create([
            'image' => 'home1.jpg',
            'tanggal' => Carbon::now(),
            'keterangan' => 'tes'
        ]);

        Home::create([
            'image' => 'home2.jpg',
            'tanggal' => Carbon::now(),
            'keterangan' => 'tes2'
        ]);
    }
}
