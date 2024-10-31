@extends('admin.obatA')

@section('content')
<div class="dashboard-content">
    <h2>Edit Manajemen Obat</h2>
    <form action="{{ url('admin.obatA/') }}" id="edit-form" method="post">
        @csrf
        <div class="profile">
            <div class="profile-item">
                <div class="label">Kategori Obat:</div>
                <select name="kategori" id="edit-category" class="edit-input">
                    <option value="Mental Health">Mental Health</option>
                    <option value="Dental">Dental</option>
                    <option value="Eyes">Eyes</option>
                </select>
            </div>
            <div class="profile-item">
                <div class="label">Nama Obat:</div>
                <input type="text" class="edit-input" id="edit-name" name="nama">
            </div>
            <div class="add">
                <button class="button" type="submit">Save</button>
                <button class="button" type="button" onclick="window.history.back()">Cancel</button>
            </div>
        </div>
    </form>
</div>
@endsection