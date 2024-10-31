@extends('riwayatA')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Riwayat</h2>
    <form id="edit-form" method="POST" action="{{ url('riwayatA/') }}">
        @csrf
        <div class="profile">
            <div class="profile-item">
                <div class="label">Id Obat:</div>
                <input type="text" class="edit-input" id="edit-category" name="idobat">
            </div>
            <div class="profile-item">
                <div class="label">Kategori Obat:</div>
                <input type="text" class="edit-input" id="edit-category" name="kategoriobat">
            </div>
            <div class="profile-item">
                <div class="label">Nama Obat:</div>
                <input type="text" class="edit-input" id="edit-name" name="nama">
            </div>
            <div class="profile-item">
                <div class="label">Stok Obat:</div>
                <input type="text" class="edit-input" id="edit-stock" name="stok">
            </div>
            <div class="add">
                <button class="button" id="submit">Save</button>
                <button class="button" type="button" onclick="window.history.back()">Cancel</button>
            </div>
        </div>    
    </form>
</div>
@endsection