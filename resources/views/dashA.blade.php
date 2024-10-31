@extends('profileadmin')

@section('content')
            <div class="dashboard-content">
                <h2>Manajemen User</h2>
                <div class="add">
                    <a href="{{ url('/dashAadd')}}" class="button" id="btn-add">Tambahkan</a>
                </div>
                <table class="data-table" id="user-table">
                    <tr>
                        <th>ID User</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($penggunas as $pengguna)
                    <tr>
                        <td>{{ $pengguna->idpengguna }}</td>
                        <td>{{ $pengguna->pengguna }}</td>
                        <td>{{ $pengguna->alamat }}</td>
                        <td>{{ $pengguna->telp }}</td>
                        <td>{{ $pengguna->jeniskelamin }}</td>
                        <td>{{ $pengguna->email }}</td>
                        <td>
                            <a href="{{ url('dashAedit/' . $pengguna->idpengguna)}}"><i class="fas fa-edit"></i></a>
                        </td>                          
                        <td>
                            <form action="{{ url('destroy.dashA/' . $pengguna->idpengguna) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn-delete"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
@endsection