let navbar =  document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let searchForm =  document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let cartItem =  document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

document.querySelector('.login').addEventListener('click', function() {
    var loginContainer = document.querySelector('.login-container');
    if (loginContainer.style.display === 'none' || loginContainer.style.display === '') {
        loginContainer.style.display = 'block';
    } else {
        loginContainer.style.display = 'none';
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const plusButtons = document.querySelectorAll('.plus');
    const minusButtons = document.querySelectorAll('.minus');

    plusButtons.forEach(button => {
        button.addEventListener('click', function () {
            const input = button.parentElement.querySelector('input[type="number"]');
            input.stepUp();
        });
    });

    minusButtons.forEach(button => {
        button.addEventListener('click', function () {
            const input = button.parentElement.querySelector('input[type="number"]');
            input.stepDown();
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const locationBtn = document.getElementById('location-btn');
    const locationAddress = document.getElementById('location-address');

    locationBtn.addEventListener('click', function() {
        getLocation();
    });

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            locationAddress.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        locationAddress.innerHTML = "Latitude: " + latitude + "<br>Longitude: " + longitude;
    }

    function addData() {
        // Ambil nilai dari inputan
        var gejala = document.getElementById("gejala").value;
        var penyakit = document.getElementById("penyakit").value;
    
        // Buat baris baru untuk ditambahkan ke dalam tabel
        var newRow = "<tr><td>" + gejala + "</td><td>" + penyakit + "</td><td><button class='btn'>Update</button><button class='btn'>Delete</button></td></tr>";
    
        // Tambahkan baris ke dalam tabel
        document.getElementById("data-table").getElementsByTagName('tbody')[0].innerHTML += newRow;
    
        // Reset nilai inputan setelah ditambahkan
        document.getElementById("gejala").value = "";
        document.getElementById("penyakit").value = "";
    }
    
});


