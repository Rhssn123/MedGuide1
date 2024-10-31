@extends('profileuser')

@section('content')
<div class="dashboard-content">
    <h2>Update Profil</h2>

    <form action="{{ url('/dashU') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="profile-item">
            <label for="pengguna">Nama:</label>
            <input type="text" id="pengguna" name="pengguna" value="{{ $pengguna->pengguna }}" required>
        </div>

        <div class="profile-item">
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" value="{{ $pengguna->alamat }}" required>
        </div>

        <div class="profile-item">
            <label for="telp">Telepon:</label>
            <input type="text" id="telp" name="telp" value="{{ $pengguna->telp }}" required>
        </div>

        <div class="profile-item">
            <label for="jeniskelamin">Jenis Kelamin:</label>
            <input type="text" id="jeniskelamin" name="jeniskelamin" value="{{ $pengguna->jeniskelamin }}" required>
        </div>

        <div class="profile-item">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $pengguna->email }}" required>
        </div>

        <div class="profile-item">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Leave blank to keep current password">
        </div>

        <div class="profile-item">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Leave blank to keep current password">
        </div>

        <div class="profile-item">
            <label for="image">Gambar Profil:</label>
            <input type="file" id="image" name="image">
        </div>

        <div class="profile-item">
            <button type="submit" class="button">Save</button>
        </div>
    </form>
</div>
@endsection
