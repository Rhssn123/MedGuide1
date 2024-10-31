@extends('profileadmin')

@section('content')
            <div class="dashboard-content">
                <h2>Riwayat</h2>
                <div class="add">
                    <a href="{{ url('/riwayatAadd')}}" class="button" id="btn-add">Tambahkan</a>
                </div>
                <table class="data-table" id="user-table">
                    <thead>
                        <tr>
                            <th>ID Customer</th>
                            <th>ID Obat</th>
                            <th>Kategori Obat</th>
                            <th>Nama Obat</th>
                            <th>Stok Obat</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    @foreach($riwayats as $kategoriobat)
                    <tbody id="data-table">
                        <tr>
                            <td>{{ $kategoriobat->idepengguna}}</td>
                            <td>{{ $kategoriobat->idobat}}</td>
                            <td>{{ $kategoriobat->kategoriobat}}</td>
                            <td>{{ $kategoriobat->nama}}</td>
                            <td>{{ $kategoriobat->stok}}</td>
                            <td>
                                <a href="{{ url('riwayatAedit/' . $kategoriobat->idpengguna)}}"><i class="fas fa-edit"></i></a>
                            </td>                          
                            <td>
                                <form action="{{ url('destroy.riwayatA/' . $kategoriobat->idpengguna) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-delete"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>    
                    </tbody>
                    @endforeach
                </table>
            </div>    
@endsection