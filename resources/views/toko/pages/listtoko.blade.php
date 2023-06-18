@extends('toko.layout.index')

@section('content')
    <div class="row">
        <div class="col l3 m6 s12">
            <div class="card danger-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h2 class="white-text m-b-5">{{ $countToko }}</h2>
                            <h6 class="white-text op-5 light-blue-text">Total Toko</h6>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="card-title">Data Toko</h5>
                            <h6 class="card-subtitle">Data Toko Pasarpedia</h6>
                        </div>
                        <div class="ml-auto">
                            <div>
                                <a href="{{ url('/halaman-toko/add') }}" class=""">Tambah Toko</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive m-b-20">
                        <table class="">
                            <thead>
                                <tr>
                                    <th>Nama Owner</th>
                                    <th>Nama Toko</th>
                                    <th>No Telepon</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($toko as $item)
                                    <tr>
                                        <td>
                                            <h5 class="m-b-0 font-16 font-medium">{{ $item->nama_owner }}</h5>
                                        </td>
                                        <td>
                                            <p class="">{{ $item->nama_toko }}</p>
                                        </td>
                                        <td class="blue-grey-text text-darken-4 font-medium">{{ $item->no_telepon }}</td>
                                        <td class="gray-text {{ $item->status == 'active' ? 'green-text' : 'red-text' }}">
                                            {{ $item->status }}
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ url('/halaman-toko/edit/' . $item->id) }}"><button
                                                    class="btn btn-primary btn-round m-r-5">Edit</button></a>
                                            <form action="{{ url('/halaman-toko/delete/' . $item->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" onclick="confirm('yakin menghapus data?')"
                                                    class="btn btn-round red ">Delete</button>
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
