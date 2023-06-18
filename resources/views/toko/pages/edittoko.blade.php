@extends('toko.layout.index')

@section('content')
<div class="card-content">
    <h6 class="font-medium">Requirements</h6>
    <form action="{{ url('/halaman-toko/update/'.$toko->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" value="{{ old('id', $toko->id) }}">
        <div class="row">
            <div class="col s3">
                <div class="h-form-label">
                    <label for="com_nh">Nama Owner</label>
                </div>
            </div>
            <div class="input-field col s9">
                <input id="com_nh" type="text" name="nama_owner" value="{{ old('nama_owner', $toko->nama_owner) }}" placeholder="Nama Owner">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <div class="h-form-label">
                    <label for="com_nh">Nama Toko</label>
                </div>
            </div>
            <div class="input-field col s9">
                <input id="com_nh" type="text" name="nama_toko" value="{{ old('nama_owner', $toko->nama_toko) }}" placeholder="Nama Toko">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <div class="h-form-label">
                    <label for="com_nh">No. Telp</label>
                </div>
            </div>
            <div class="input-field col s9">
                <input id="com_nh" type="text" name="no_telepon" placeholder="Nomer HP" value="{{ old('no_telepon', $toko->no_telepon) }}">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <div class="h-form-label">
                    <label for="com_nh">Pilih Status</label>
                </div>
            </div>

            <div class="input-field col s9">
                <select name="status">
                    <option value="" disabled selected>Pilih Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
        </div>

        <div class="card-content">
            <div class="form-action">
                <button class="btn cyan waves-effect waves-light" type="submit">Save</button>
                <a href="{{ route("toko.show") }}" class="btn waves-effect waves-light grey darken-4">Cancel</a>
            </div>
        </div>
    </form>
    
</div>
@endsection