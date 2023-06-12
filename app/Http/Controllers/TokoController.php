<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TokoController extends Controller
{
    public function index()
    {
        $toko = Toko::all();
        return view('toko.pages.listtoko',
        ['toko' => $toko,
        'countToko' => $toko->count()
        ]  );
    }

    public function add()
    {
        $toko = Toko::all();
        return view('toko.pages.addtoko', ['toko' => $toko]);
    }

    public function store(Request $request  ){
        $this->validate($request, [
            'nama_owner'     => 'required',
            'nama_toko'     => 'required',
            'no_telepon'   => 'required',
            'status'   => 'required'
        ]);

        // insert data ke table toko
		Toko::create([
			'nama_owner' => $request->nama_owner,
			'nama_toko' => $request->nama_toko,
			'no_telepon' => $request->no_telepon,
			'status' => $request->status
		]);
		// alihkan halaman ke halaman toko
		return redirect('/halaman-toko');
    }

    public function edit($id){
        $toko = Toko::where('id',$id)->first();
		// passing data toko yang didapat ke view edit.blade.php
		return view('toko.pages.edittoko', ['toko' => $toko]);
    }

    public function update(Request $request){
        $this->validate($request, [
            'nama_owner'     => 'required',
            'nama_toko'     => 'required',
            'no_telepon'   => 'required',
            'status'   => 'required'
        ]);

		Toko::where('id',$request->id)->update([
			'nama_owner' => $request->nama_owner,
			'nama_toko' => $request->nama_toko,
			'no_telepon' => $request->no_telepon,
			'status' => $request->status
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/halaman-toko');
    }

    public function delete($id){
        // menghapus data pegawai berdasarkan id yang dipilih
		Toko::where('id',$id)->delete();

		// alihkan halaman ke halaman pegawai
        return redirect('/halaman-toko');
    }
}
