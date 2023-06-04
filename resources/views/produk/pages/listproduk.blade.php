@extends('produk.layout.index')

@section('content') 
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="card-title">Data Produk</h5>
                            <h6 class="card-subtitle">Data Produk Pasarpedia</h6>
                        </div>
                        <div class="ml-auto">
                            <div>
                                <a href="{{ url('/halaman-produk/add') }}" class="bg-teal-300">Tambah Produk</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive m-b-20">
                        <table class="">
                            <thead>
                                <tr>
                                    <th>Nama Toko</th>
                                    <th>Foto Produk</th>
                                    <th>Harga</th>
                                    <th>Nama Produk</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($produk as $item)
                                <tr>
                                    <td>
                                        <h5 class="m-b-0 font-16 font-medium">{{ $item->nama_toko }}</h5>
                                    </td>
                                    <td>
                                        <img src="{{ asset('./storage/blogs/' . $item->foto_produk) }}" width="200" height="200" alt="">
                                    </td>
                                    <td class="blue-grey-text text-darken-4 font-medium">{{ $item->harga }}</td>
                                    <td class="green-text">{{ $item->nama_produk }}</td>
                                    <td>
                                        <a href="{{ url('/halaman-produk/edit/' . $item->id) }}">Edit</a>
                                        <form action="{{ url('/halaman-produk/delete/' . $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="confirm('yakin menghapus data?')">Delete</button>
                                        </form>
                                    </td>
                                    </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
