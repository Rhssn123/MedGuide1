@extends('profileuser')

@section('content')
    <div class="dashboard-content">
        <h2>Update Gambar Profil</h2>
        <a href="{{ url("/dashU") }}">
            <div class="user-profile">
                @if(Auth::check() && Auth::user()->profile_image)
                    <img src="{{ asset('storage/profile_images/' . Auth::user()->profile_image) }}" alt="">
                @else
                    <img src="/bootstrap/images/profile-admin.jpg" alt="">
                @endif
            </div>
        </a>

        <form action="{{ url('/update-profile-image') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="gambar">Upload Gambar:</label>
                <input type="file" id="gambar" name="gambar" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
