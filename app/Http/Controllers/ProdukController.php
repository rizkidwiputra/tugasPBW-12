<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
    
 
    	// mengirim data produk ke view index
		return view('produk.pages.listproduk', [
            'produk' => $produk,
            'countProduk' => $produk->count()
        ]);
    }
    public function add()
    {
        $toko = Toko::all();

        return view('produk.pages.addproduct', ['toko' => $toko]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'foto_produk'     => 'required|image|mimes:png,jpg,jpeg',
            'toko_id'     => 'required',
            'harga'   => 'required',
            'nama_produk'   => 'required'
        ]);
    
        //upload image
        $image = $request->file('foto_produk');
        $image->storeAs('public/blogs', $image->hashName());
        // insert data ke table produk
		Produk::create([
			'toko_id' => $request->toko_id,
			'foto_produk' => $image->hashName(),
			'harga' => $request->harga,
			'nama_produk' => $request->nama_produk
		]);
		// alihkan halaman ke halaman produk
		return redirect('/halaman-produk')->withStatus('Berhasil menambahkan produk.');
    }

    public function edit($id){
        $produk = Produk::where('id',$id)->first();
        $toko = Toko::all();
		// passing data produk yang didapat ke view edit.blade.php
		return view('produk.pages.editproduct', ['produk' => $produk, 'toko' => $toko]);
    }

    public function update(Request $request){
        $this->validate($request, [
            'foto_produk'     => 'required|image|mimes:png,jpg,jpeg',
            'toko_id'     => 'required',
            'harga'   => 'required',
            'nama_produk'   => 'required'
        ]);
    
        //upload image
        $image = $request->file('foto_produk');
        $image->storeAs('public/blogs', $image->hashName());
        // insert data ke table produk

        // Produk::where('id',$request->id)->update([
		// 	'toko_id' => $request->toko_id,
		// 	'foto_produk' => $image->hashName(),
		// 	'harga' => $request->harga,
		// 	'nama_produk' => $request->nama_produk
		// ]);

        $produk = Produk::find($request->id);
        $produk->toko_id = $request->toko_id;
        $produk->foto_produk = $image->hashName();
        $produk->harga = $request->harga;
        $produk->nama_produk = $request->nama_produk;
        $produk->save();
		// alihkan halaman ke halaman produk
		return redirect('/halaman-produk')->withStatus('Berhasil mengubah produk.');
    }

    public function delete($id){
        // menghapus data pegawai berdasarkan id yang dipilih
		Produk::where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
        return redirect('/halaman-produk')->withStatus('Berhasil menghapus produk.');    
    }
}