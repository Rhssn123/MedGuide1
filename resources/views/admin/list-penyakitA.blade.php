@extends('profileadmin')

@section('content')
    <div class="dashboard-content">
        <h2>Pilih Kategori Penyakit</h2>
        <form action="{{ url('/admin.penyakitA') }}" method="GET">
            <div class="form-group">
                <label for="kategori_penyakit">Kategori Penyakit:</label>
                <select name="kategori_penyakit" id="kategori_penyakit">
                    <option value="">Pilih Kategori Penyakit</option>
                    <option value="1">Mental Health</option>
                    <option value="2">Dental</option>
                    <option value="3">Eyes</option>
                    <option value="4">Heart</option>
                    @foreach ($kategorisp as $kategori)
                        <option value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Pilih</button>
        </form>
    </div>

    
@endsection
