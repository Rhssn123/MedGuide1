@extends('saveU')

@section('content')
<div class="dashboard-content">
    <h2>Edit Data Obat</h2>
    <form id="edit-form" method="POST" action="{{ url('saveU/') }}">
        @csrf
        @method('PUT')
        <div class="obat-container">
            <div class="profile-item">
                <div class="label">Nama Obat:</div>
                <input type="text" class="edit-input" id="edit-obat" >
            </div>
            <div class="profile-item">
                <div class="label">Harga:</div>
                <input type="text" class="edit-input" id="edit-jenis" >
            </div>
            </div>
        </div>
        <div class="add">
            <button class="button" id="btn-save">Save</button>
            <button class="button" id="btn-cancel">Cancel</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('btn-cancel').addEventListener('click', function() {
        // Redirect to previous page or close the edit form
        window.history.back();
    });

    document.getElementById('edit-form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Get updated data from input fields
        var obat = document.getElementById('edit-obat').value;
        var jenis = document.getElementById('edit-jenis').value;
        var jumlah = document.getElementById('edit-jumlah').value;
        var apotek = document.getElementById('edit-apotek').value;
        // Send data to server to update obat data
        // You can use AJAX or fetch API to send data to server
        // Example: fetch('update_obat.php', { method: 'POST', body: new FormData(this) })
        //           .then(response => response.json())
        //           .then(data => { console.log(data); });
        alert('Obat data updated successfully!');
    });
</script>
@endsection