@extends('profileadmin')

@section('content')
    <div class="dashboard-content">
        <h2>Pilih Kategori Obat</h2>
        <form action="{{ url('admin.obatA') }}" method="GET">
            <div class="form-group">
                <label for="kategori_obat">Kategori Obat:</label>
                <select name="kategori_obat" id="kategori_obat">
                    <option value="">Pilih Kategori Obat</option>
                    <option value="1">Mental Health</option>
                    <option value="2">Dental</option>
                    <option value="3">Eyes</option>
                    <option value="4">Heart</option>
                    @foreach ($kategoriso as $kategoriObat)
                        <option value="{{ $kategoriObat->idkategori }}">{{ $kategoriObat->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Pilih</button>
        </form>
    </div>
@endsection
