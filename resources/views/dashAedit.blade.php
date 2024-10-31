@extends('dashA')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen User</h2>
    <form id="edit-form" method="POST" action="{{ url('dashA/' . $penggunas->first()->idpengguna) }}">
        @csrf <!-- Tambahkan directive CSRF di sini -->
        @method('PUT') <!-- Gunakan metode PUT untuk penyuntingan -->
        <div class="profile">
            <div class="profile-item">
                <div class="label">Nama:</div>
                <input type="text" class="edit-input" id="edit-name" value={{ $penggunas->first()->pengguna }}>
            </div>
            <div class="profile-item">
                <div class="label">Alamat:</div>
                <input type="text" class="edit-input" id="edit-address" value={{ $penggunas->first()->alamat }}>
            </div>
            <div class="profile-item">
                <div class="label">Telepon:</div>
                <input type="text" class="edit-input" id="edit-phone" value={{ $penggunas->first()->telp }}>
            </div>
            <div class="profile-item">
                <div class="label">Jenis Kelamin:</div>
                <input type="text" class="edit-input" id="edit-gender" value={{ $penggunas->first()->jeniskelamin }}>
            </div>
            <div class="profile-item">
                <div class="label">Email:</div>
                <input type="email" class="edit-input" id="edit-email" value={{ $penggunas->first()->email }}>
            </div>
        </div>
        <div class="add">
            <button class="button" type="submit">Save</button>
            <button class="button" type="button" onclick="window.history.back()">Cancel</button>
        </div>
    </form>
</div>
@endsection