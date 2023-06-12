<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk = new Produk();
        $produk->toko_id=1;
        $produk->foto_produk="default.png";
        $produk->harga=5000;
        $produk->nama_produk="Sawi Putih";
        $produk->created_at=now();
        $produk->updated_at=now();
        $produk->save();

        $produk = new Produk();
        $produk->toko_id=1;
        $produk->foto_produk="default.png";
        $produk->harga=500;
        $produk->nama_produk="Bayam";
        $produk->created_at=now();
        $produk->updated_at=now();
        $produk->save();

        $produk = new Produk();
        $produk->toko_id=1;
        $produk->foto_produk="default.png";
        $produk->harga=2500;
        $produk->nama_produk="Brokoli";
        $produk->created_at=now();
        $produk->updated_at=now();
        $produk->save();

        $produk = new Produk();
        $produk->toko_id=2;
        $produk->foto_produk="default.png";
        $produk->harga=6500;
        $produk->nama_produk="Kangkung";
        $produk->created_at=now();
        $produk->updated_at=now();
        $produk->save();

        $produk = new Produk();
        $produk->toko_id=2;
        $produk->foto_produk="default.png";
        $produk->harga=2000;
        $produk->nama_produk="Kentang";
        $produk->created_at=now();
        $produk->updated_at=now();
        $produk->save();

        $produk = new Produk();
        $produk->toko_id=2;
        $produk->foto_produk="default.png";
        $produk->harga=6500;
        $produk->nama_produk="Kubis";
        $produk->created_at=now();
        $produk->updated_at=now();
        $produk->save();
    }
}
