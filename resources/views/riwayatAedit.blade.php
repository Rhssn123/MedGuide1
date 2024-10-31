@extends('riwayatA')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Riwayat</h2>
    <form id="edit-form" method="POST" action="{{ url('riwayatA/' . $riwayats->idpengguna) }}">
        @csrf
        @method("PUT")
        <div class="profile">

            <div class="profile-item">
                <div class="label">Id Obat:</div>
                <input type="text" class="edit-input" id="edit-category" value={{ $riwayats->idobat }}>
            </div>
            <div class="profile-item">
                <div class="label">Kategori Obat:</div>
                <input type="text" class="edit-input" id="edit-category" value={{ $riwayats->kategoriobat }}>
            </div>
            <div class="profile-item">
                <div class="label">Nama Obat:</div>
                <input type="text" class="edit-input" id="edit-name" value={{ $riwayats->nama }}>
            </div>
            <div class="profile-item">
                <div class="label">Stok Obat:</div>
                <input type="text" class="edit-input" id="edit-stock" value={{ $riwayats->stok }}>
            </div>
            <div class="add">
                <button class="button" type="submit">Save</button>
                <button class="button" type="button" onclick="window.history.back()">Cancel</button>
            </div>
    </form>
</div>
@endsection