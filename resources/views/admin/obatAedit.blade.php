@extends('profileadmin')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Obat</h2>
    <form action="{{ url('admin.obatAedit/' . $kategoriObat->idkategori) }}" id="edit-form" method="POST">
        @csrf
        @method('PUT')
        <div class="profile">
            <div class="profile-item">
                <div class="label">Kategori Obat:</div>
                <select name="kategoriObat" id="edit-category" class="edit-input">
                    <option value="Mental Health" {{ $kategoriObat->kategoriObat == 'Mental Health' ? 'selected' : '' }}>Mental Health</option>
                    <option value="Dental" {{ $kategoriObat->kategoriObat == 'Dental' ? 'selected' : '' }}>Dental</option>
                    <option value="Eyes" {{ $kategoriObat->kategoriObat == 'Eyes' ? 'selected' : '' }}>Eyes</option>
                </select>
            </div>
            <div class="profile-item">
                <div class="label">Nama Obat:</div>
                <input type="text" class="edit-input" id="edit-name" name="nama" value="{{ $kategoriObat->nama }}">
            </div>
            <div class="add">
                <button class="button" type="submit">Save</button>
                <button class="button" type="button" onclick="window.history.back()">Cancel</button>
            </div>
        </div>
    </form>
</div>
@endsection