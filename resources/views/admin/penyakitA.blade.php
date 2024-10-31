@extends('profileadmin')

@section('content')
    <!--<div class="dashboard-content">
        <h2>Pilih Kategori Penyakit</h2>
        <form action="{{ url('/admin.penyakitA') }}" method="GET">
            <div class="form-group">
                <label for="kategori_penyakit">Kategori Penyakit:</label>
                <select name="kategori_penyakit" id="kategori_penyakit">
                    <option value="">Pilih Kategori Penyakit</option>
                    <option value="1">Mental Health</option>
                    @foreach ($kategorisp as $kategori)
                        <option value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Pilih</button>
        </form>
    </div>-->
    
    <div class="dashboard-content">
        <h2>Manajemen Penyakit</h2>
        <div class="add">
            <a href="{{ url('/admin.penyakitAadd')}}" class="button" id="btn-add">Tambahkan</a>
        </div>
        <table class="data-table" id="user-table">
            <thead>
                <tr>
                    <th>ID Penyakit</th>
                    <th>Kategori Penyakit</th>
                    <th>Nama Penyakit</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody id="data-table">
                @foreach ($kategorisp as $kategori)
                <tr>
                    <td>{{ $kategori->idkategori }}</td>
                    <td>{{ $kategori->kategori }}</td>
                    <td>{{ $kategori->nama }}</td>
                    <td>
                        <a href="{{ url('admin.penyakitAedit/' . $kategori->idkategori) }}"><i class="fas fa-edit"></i></a>
                    </td>                            
                    <td>
                        <form action="{{ url('destroyPenyakit/' . $kategori->idkategori) }}" method="post">
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

