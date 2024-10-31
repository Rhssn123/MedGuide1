@extends('profileadmin')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Penyakit</h2>
    <form id="edit-form" method="POST" action="{{ url('admin.penyakitAedit/' . $kategori->idkategori) }}">
        @csrf <!-- Tambahkan directive CSRF di sini -->
        @method('PUT') <!-- Gunakan metode PUT untuk penyuntingan -->
        <div class="profile">
            <div class="profile-item">
                <div class="label">Kategori Penyakit:</div>
                <select name="kategori" id="edit-category" class="edit-input">
                    <option value="Mental Health" {{ $kategori->kategori == 'Mental Health' ? 'selected' : '' }}>Mental Health</option>
                    <option value="Dental" {{ $kategori->kategori == 'Dental' ? 'selected' : '' }}>Dental</option>
                    <option value="Eyes" {{ $kategori->kategori == 'Eyes' ? 'selected' : '' }}>Eyes</option>
                </select>
            </div>
            <div class="profile-item">
                <div class="label">Nama Penyakit:</div>
                <input type="text" class="edit-input" id="edit-name" name="nama" value="{{ $kategori->nama }}">
            </div>
            <div class="add">
                <button class="button" type="submit">Save</button>
                <button class="button" type="button" onclick="window.location='{{ url('admin.penyakitA') }}'">Cancel</button>
            </div>
        </div>
    </form>    
</div>
@endsection