function validateForm() {
    // Dapatkan nilai dari input form
    let namaPelanggan = document.getElementById('namaPelanggan').value;
    let email = document.getElementById('email').value;
    let jamKeberangkatan = document.getElementById('jamKeberangkatan').value;
    let tujuanKeberangkatan = document.getElementById('tujuanKeberangkatan').value;
    let jumlahTiket = document.getElementById('jumlahTiket').value;

    // Menghapus pesan error
    document.getElementById('errorNamaPelanggan').innerHTML = '';
    document.getElementById('errorEmail').innerHTML = '';
    document.getElementById('errorJamKeberangkatan').innerHTML = '';
    document.getElementById('errorTujuanKeberangkatan').innerHTML = '';
    document.getElementById('errorJumlahTiket').innerHTML = '';

    // Validasi 
    if (namaPelanggan === '' || namaPelanggan.length > 30) {
        document.getElementById('errorNamaPelanggan').innerHTML = 'Nama Pelanggan harus diisi (maksimum 30 karakter).';
        return false;
    }
    let emailReg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === '' || !emailReg.test(email)) {
        document.getElementById('errorEmail').innerHTML = 'Email harus diisi dengan format yang valid.';
        return false;
    }
    let jam = /^(0[0-9]|1[0-9]|2[0-3])\.[0-5][0-9]$/;
    if (jamKeberangkatan === '' || !jam.test(jamKeberangkatan)) {
        document.getElementById('errorJamKeberangkatan').innerHTML = 'Jam Keberangkatan harus diisi dengan format jam (00.00 - 23.59).';
        return false;
    }
    if (tujuanKeberangkatan === '') {
        document.getElementById('errorTujuanKeberangkatan').innerHTML = 'Tujuan Keberangkatan harus diisi.';
        return false;
    }
    let jumlahTiketInt = parseInt(jumlahTiket);
    if (isNaN(jumlahTiketInt) || jumlahTiketInt < 1 || jumlahTiketInt > 10) {
        document.getElementById('errorJumlahTiket').innerHTML = 'Jumlah Tiket harus diisi dengan bilangan bulat antara 1 - 10.';
        return false;
    }
    // Tampilkan data jika valid
    displayData(namaPelanggan, email, jamKeberangkatan, tujuanKeberangkatan, jumlahTiket);

    return false;
}

function displayData(namaPelanggan, email, jamKeberangkatan, tujuanKeberangkatan, jumlahTiket) {
    let resultContainer = document.getElementById('resultContainer');
    resultContainer.innerHTML = '<h2>Data Form:</h2>' +
        '<p>Nama Pelanggan: ' + namaPelanggan + '</p>' +
        '<p>Email: ' + email + '</p>' +
        '<p>Jam Keberangkatan: ' + jamKeberangkatan + '</p>' +
        '<p>Tujuan Keberangkatan: ' + tujuanKeberangkatan + '</p>' +
        '<p>Jumlah Tiket: ' + jumlahTiket + '</p>';
}