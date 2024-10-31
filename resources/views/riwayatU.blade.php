@extends('profile')

@section('content')
            <div class="dashboard-content">
                <h2>Riwayat</h2>
                <div class="history">
                    <div class="history-item">
                        <span class="timestamp">12:00</span>
                        <p class="event">Menyimpan Obat</p>
                    </div>
                    <div class="history-item">
                        <span class="timestamp">13:30</span>
                        <p class="event">Beli obat di apotek</p>
                    </div>
                    <div class="history-item">
                        <span class="timestamp">15:00</span>
                        <p class="event">Ambil resep di rumah sakit</p>
                    </div>
                    <!-- Tambahkan riwayat lain sesuai kebutuhan -->
                </div>
            </div>
@endsection