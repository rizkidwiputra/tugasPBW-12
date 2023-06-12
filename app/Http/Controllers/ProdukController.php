<?php

namespace App\Http\Controllers;

use App\Models\Produk;
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
        $produk = Produk::all();

        return view('produk.pages.addproduct', ['produk' => $produk]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'foto_produk'     => 'required|image|mimes:png,jpg,jpeg',
            'nama_toko'     => 'required',
            'harga'   => 'required',
            'nama_produk'   => 'required'
        ]);
    
        //upload image
        $image = $request->file('foto_produk');
        $image->storeAs('public/blogs', $image->hashName());
        // insert data ke table produk
		Produk::create([
			'nama_toko' => $request->nama_toko,
			'foto_produk' => $image->hashName(),
			'harga' => $request->harga,
			'nama_produk' => $request->nama_produk
		]);
		// alihkan halaman ke halaman produk
		return redirect('/halaman-produk');
    }

    public function edit($id){
        $produk = Produk::where('id',$id)->first();
		// passing data produk yang didapat ke view edit.blade.php
		return view('produk.pages.editproduct', ['produk' => $produk]);
    }

    public function update(Request $request){
        $this->validate($request, [
            'foto_produk'     => 'required|image|mimes:png,jpg,jpeg',
            'nama_toko'     => 'required',
            'harga'   => 'required',
            'nama_produk'   => 'required'
        ]);
    
        //upload image
        $image = $request->file('foto_produk');
        $image->storeAs('public/blogs', $image->hashName());
        // insert data ke table produk
		Produk::where('id',$request->id)->update([
			'nama_toko' => $request->nama_toko,
			'foto_produk' => $image->hashName(),
			'harga' => $request->harga,
			'nama_produk' => $request->nama_produk
		]);
		// alihkan halaman ke halaman produk
		return redirect('/halaman-produk');
    }

    public function delete($id){
        // menghapus data pegawai berdasarkan id yang dipilih
		Produk::where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
        return redirect('/halaman-produk');    
    }


}
