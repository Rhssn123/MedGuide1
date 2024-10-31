
    <div class="dashboard-content">
        <h2>Data Diri</h2>
        <a href="{{ url("/dashA") }}"><div class="user-profile">
            <img src="/bootstrap/images/profile-admin.jpg" alt="">
        </a></div>
        @if(!empty($penggunas) && $penggunas[0] !== null)
            @foreach ($penggunas as $pengguna)
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

