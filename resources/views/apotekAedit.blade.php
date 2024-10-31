@extends('profileadmin')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Apotek</h2>
    <form id="edit-form" method="POST" action="{{ url('apotekAedit/' . $namaApotek->idkategori) }}" enctype="multipart/form-data">
        @csrf <!-- Tambahkan directive CSRF di sini -->
        @method('PUT') <!-- Gunakan metode PUT untuk penyuntingan -->
        <div class="profile">
            <div class="profile-item">
                <div class="label">Nama Apotek:</div>
                <input type="text" class="edit-input" id="edit-name" name="namaapotek" value="{{ $namaApotek->namaapotek }}">
            </div>
            <div class="profile-item">
                <div class="label">Alamat Apotek:</div>
                <input type="text" class="edit-input" id="edit-address" name="alamat" value="{{ $namaApotek->alamat }}">
            </div>
            <div class="profile-item">
                <div class="label">Telp:</div>
                <input type="text" class="edit-input" id="edit-telp" name="telp" value="{{ $namaApotek->telp }}">
            </div>
            <div class="profile-item">
                <div class="label">Gambar:</div>
                <input type="file" class="edit-input" id="edit-image" name="gambar">
            </div>
            <div class="add">
                <button class="button" id="btn-save" type="submit">Save</button>
                <button class="button" type="button" onclick="window.history.back()">Cancel</button>
            </div>
        </div>
    </form>
</div>
@endsection