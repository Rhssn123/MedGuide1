@extends('profileadmin')

@section('content')
    <div class="dashboard-content">
        <h2>Manajemen Apotek</h2>
        <div class="profile">
            <form action="{{ url('apotekA/')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="profile-item">
                    <label for="namaapotek">Nama Apotek:</label>
                    <input type="text" id="namaapotek" name="namaapotek">
                </div>
                <div class="profile-item">
                    <label for="alamat">Alamat Apotek:</label>
                    <input type="text" id="alamat" name="alamat">
                </div>
                <div class="profile-item">
                    <label for="telp">Telp:</label>
                    <input type="text" id="telp" name="telp">
                </div>
                <div class="profile-item">
                    <label for="gambar">Gambar:</label>
                    <input type="file" id="gambar" name="gambar">
                </div>
                <div class="add">
                    <button class="button" id="submit">Save</button>
                    <button class="button" type="button" onclick="window.history.back()">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection
