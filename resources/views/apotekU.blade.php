@extends('profileuser')

@section('content')
            <div class="dashboard-content">
                <h2>Apotek Terdekat</h2>
                <div class="pharmacy-container">
                    @foreach ($namaApotek as $namaapotek)
                        <div class="pharmacy-item">
                            <img src="{{ asset('storage/' . $namaapotek->gambar) }}" alt="{{ $namaapotek->namaapotek }}">
                            <h3>{{ $namaapotek->namaapotek }}</h3>
                            <p>Address  : </p>
                            <p>{{ $namaapotek->alamat }}</p>
                            <p>Phone    : </p>
                            <p>{{ $namaapotek->telp }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
