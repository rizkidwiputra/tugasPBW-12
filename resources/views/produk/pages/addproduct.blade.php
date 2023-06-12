@extends('produk.layout.index')

@section('content')
    <div class="card-content">
        <h6 class="font-medium">Requirements</h6>
        <form action="{{ url('/halaman-produk/store') }}" method="post" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="row">
                <div class="col s3">
                    <div class="h-form-label">
                        <label for="com_nh">Nama Toko</label>
                    </div>
                </div>
                <div class="input-field col s9">
                    {{-- <input id="com_nh" type="text" name="toko_id" placeholder="Nama Toko"> --}}
                    <select name="toko_id" id="">
                        @foreach ($toko as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_toko }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col s3">
                    <div class="h-form-label">
                        <label for="com_nh">Foto Produk</label>
                    </div>
                </div>
                <div class="input-field col s9">
                    <div class="file-field input-field">
                        <div class="btn cyan">
                            <span>File</span>
                            <input name="foto_produk" type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Choose File Here">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s3">
                    <div class="h-form-label">
                        <label for="com_nh">Harga</label>
                    </div>
                </div>
                <div class="input-field col s9">
                    <input id="com_nh" type="text" name="harga" placeholder="Harga">
                </div>
            </div>

            <div class="row">
                <div class="col s3">
                    <div class="h-form-label">
                        <label for="com_nh">Nama Produk</label>
                    </div>
                </div>
                <div class="input-field col s9">
                    <input id="com_nh" type="text" name="nama_produk" placeholder="Nama Produk">
                </div>
            </div>
            <div class="card-content">
                <div class="form-action">
                    <button class="btn cyan waves-effect waves-light" type="submit">Save</button>
                    <a href="{{ route('produk.show') }}" class="btn waves-effect waves-light grey darken-4">Cancel</a>
                </div>
            </div>
        </form>

    </div>
@endsection
