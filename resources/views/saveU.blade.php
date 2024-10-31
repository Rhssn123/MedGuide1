@extends('profileuser')

@section('content')
            <div class="dashboard-content">
                <h2>Penyimpanan Ketersediaan Obat</h2>
                <table class="container">
                    <div class="obat-container" id="favorite-container">
                        <!--<div class="label">Obat</div>
                        <div class="text">Paracetamol</div>
                        <div class="label">Jenis Penyakit</div>
                        <div class="text">Demam, Sakit Kepala</div>-->
                    </div>
                </table>
                <div class="add">
                    <a href="{{ url('/saveUedit')}}" class="button" id="btn-add">Edit</a>
                </div>
            </div>     

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                  const favoriteContainer = document.getElementById('favorite-container');
                  const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
              
                  favorites.forEach(favorite => {
                    const div = document.createElement('div');
                    div.classList.add('favorite-item');
                    div.innerHTML = `
                      <div class="label">Obat</div>
                      <div class="text">${favorite.name}</div>
                      <div class="label">Harga</div>
                      <div class="text">${favorite.price}</div>
                    `;
                    favoriteContainer.appendChild(div);
                  });
                });
            </script>
@endsection
