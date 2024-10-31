@extends('profileadmin')

@section('content')
<div class="dashboard-content">
    <h2>Manajemen Obat</h2>
    <div class="add">
        <a href="{{ url('/admin.obatAadd') }}" class="button" id="btn-add">Tambahkan</a>
    </div>
    <table class="data-table" id="user-table">
        <thead>
            <tr>
                <th>ID Obat</th>
                <th>Kategori Obat</th>
                <th>Nama Obat</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="data-table">
            @foreach ($kategoriso as $kategoriObat)
            <tr>
                <td>{{ $kategoriObat->idkategori }}</td>
                <td>{{ $kategoriObat->kategoriObat }}</td>
                <td>{{ $kategoriObat->nama }}</td>
                <td>
                    <a href="{{ url('admin.obatAedit/' . $kategoriObat->idkategori) }}"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                    <form action="{{ url('destroy.obatA/' . $kategoriObat->idkategori) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn-delete"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection