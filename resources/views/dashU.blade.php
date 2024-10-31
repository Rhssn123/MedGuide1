@extends('profileuser')

@section('content')
    <!--<div class="dashboard-content">
        <div class="dashboard-content">
            @include('partials.searchResults', ['penggunas' => $penggunas])
        </div>
    </div>-->

    <div class="dashboard-content">
        <h2>Data Diri</h2>
        <a href="{{ url("/dashU") }}"><div class="user-profile">
            @if(Auth::check() && Auth::user()->profile_image)
                    <img src="{{ asset('storage/profile_images/' . Auth::user()->profile_image) }}" alt="">
                @else
                    <img src="/bootstrap/images/profile-admin.jpg" alt="">
                @endif
        </a></div>
        <div class="add-1">
            <a href="{{ url('/dashUUpProfile')}}" class="button" id="btn-add"></a>
        </div>
        @if(!empty($penggunas) && $penggunas[0] !== null)
            @foreach ($penggunas as $pengguna)
            @csrf
                <div class="profile">
                    <div class="profile-item">
                        <div class="label">Nama:</div>
                        <div class="info">{{ $pengguna->pengguna }}</div>
                    </div>
                    <div class="profile-item">
                        <div class="label">Alamat:</div>
                        <div class="info">{{ $pengguna->alamat }}</div>
                    </div>
                    <div class="profile-item">
                        <div class="label">Telepon:</div>
                        <div class="info">{{ $pengguna->telp }}</div>
                    </div>
                    <div class="profile-item">
                        <div class="label">Jenis Kelamin:</div>
                        <div class="info">{{ $pengguna->jeniskelamin }}</div>
                    </div>
                    <div class="profile-item">
                        <div class="label">Email:</div>
                        <div class="info">{{ $pengguna->email }}</div>
                    </div>
                    <div class="profile-item">
                        <div class="label">Password:</div>
                        <div class="info">*****</div>
                    </div>
                </div>
            @endforeach
            <div class="add">
                <a href="{{ url('dashUedit/' . $pengguna->idpengguna)}}" class="button" id="btn-add">Edit</a>
            </div>
        @else
            <p>Data pengguna tidak ditemukan.</p>
        @endif
    </div>

@endsection
