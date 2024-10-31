@extends('dashA')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen User</h2>
    <form id="edit-form" method="POST" action="{{ url('dashA/') }}">
        @csrf <!-- Tambahkan directive CSRF di sini -->
        <div class="profile">
            <div class="profile-item">
                <div class="label">Nama:</div>
                <input type="pengguna" class="edit-input" id="edit-name" name="pengguna">
            </div>
            <div class="profile-item">
                <div class="label">Alamat:</div>
                <input type="alamat" class="edit-input" id="edit-address" name="alamat">
            </div>
            <div class="profile-item">
                <div class="label">Telepon:</div>
                <input type="telp" class="edit-input" id="edit-phone" name="telp">
            </div>
            <div class="profile-item">
                <div class="label">Jenis Kelamin:</div>
                <input type="jeniskelamin" class="edit-input" id="edit-gender" name="jeniskelamin">
            </div>
            <div class="profile-item">
                <div class="label">Email:</div>
                <input type="email" class="edit-input" id="edit-email" name="email">
            </div>
            <div class="profile-item">
                <div class="label">Password:</div>
                <input type="password" class="edit-input" id="edit-password" name="password">
            </div>
        </div>
        <div class="add">
            <button class="button" id="submit">Save</button>
            <button class="button" type="button" onclick="window.history.back()">Cancel</button>
        </div>
    </form>
</div>
@endsection