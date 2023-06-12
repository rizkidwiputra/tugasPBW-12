<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Toko;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toko = new Toko();
        $toko->nama_owner="Rizki Dwi Putra";
        $toko->nama_toko="Toko Barokah";
        $toko->no_telepon="089697753138";
        $toko->status="active";
        $toko->created_at=now();
        $toko->updated_at=now();
        $toko->save();
        
        $toko = new Toko();
        $toko->nama_owner="Prasetia Wahyu Ramadhan";
        $toko->nama_toko="Toko Makmur";
        $toko->no_telepon="081456987123";
        $toko->status="active";
        $toko->created_at=now();
        $toko->updated_at=now();
        $toko->save();
    }
}
