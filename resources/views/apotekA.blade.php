@extends('profileadmin')

@section('content')
            <div class="dashboard-content">
                <h2>Manajemen Apotek</h2>
                <div class="add">
                    <a href="{{ url('/apotekAadd')}}" class="button" id="btn-add">Tambahkan</a>
                </div>
                <table class="data-table" id="user-table">
                    <thead>
                        <tr>
                            <th>ID Apotek</th>
                            <th>Nama Apotek</th>
                            <th>Alamat Apotek</th>
                            <th>Telp</th>
                            <th>Gambar</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data-table">
                        @foreach ($namaApotek as $namaapotek)
                        <tr>
                            <td>{{ $namaapotek->idkategori }}</td>
                            <td>{{ $namaapotek->namaapotek }}</td>
                            <td>{{ $namaapotek->alamat }}</td>
                            <td>{{ $namaapotek->telp }}</td>
                            <td>{{ $namaapotek->gambar }}</td>
                            <td>
                                <a href="{{ url('apotekAedit/' . $namaapotek->idkategori) }}"><i class="fas fa-edit"></i></a>
                            </td>                            
                            <td>
                                <form action="{{ url('destroyApotek/' . $namaapotek->idkategori) }}" method="post">
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