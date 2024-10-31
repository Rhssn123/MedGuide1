@extends('dashU')

@section('content')
<div class="dashboard-content">
    <h2>Edit Data Diri</h2>
    <form id="edit-form" method="post" action="{{ url('dashU/' . $penggunas->first()->idpengguna) }}">
        @csrf
        @method('PUT')
        <div class="profile">
            <div class="profile-item">
                <div class="label">Nama:</div>
                <input type="text" class="edit-input" name="pengguna" value="{{ $penggunas->first()->pengguna }}">
            </div>
            <div class="profile-item">
                <div class="label">Alamat:</div>
                <input type="text" class="edit-input" name="alamat" value="{{ $penggunas->first()->alamat }}">
            </div>
            <div class="profile-item">
                <div class="label">Telepon:</div>
                <input type="text" class="edit-input" name="telp" value="{{ $penggunas->first()->telp }}">
            </div>
            <div class="profile-item">
                <div class="label">Jenis Kelamin:</div>
                <input type="text" class="edit-input" name="jeniskelamin" value="{{ $penggunas->first()->jeniskelamin }}">
            </div>
            <div class="profile-item">
                <div class="label">Email:</div>
                <input type="email" class="edit-input" name="email" value="{{ $penggunas->first()->email }}">
            </div>
            <div class="profile-item">
                <div class="label">Password:</div>
                <input type="password" class="edit-input" name="password" value="">
            </div>
        </div>
        <div class="add">
            <button class="button" type="submit">Save</button>
            <button class="button" type="button" onclick="window.history.back()">Cancel</button>
        </div>
    </form>
</div>
@endsection