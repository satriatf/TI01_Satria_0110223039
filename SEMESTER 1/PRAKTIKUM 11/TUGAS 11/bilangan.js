function hitungJumlah() {
    // Mengambil nilai dari input bilangan pertama dan kedua
    let bilangan1 = document.getElementById("bilangan1").valueAsNumber || 0;
    let bilangan2 = document.getElementById("bilangan2").valueAsNumber || 0;

    // Menghitung jumlah kedua bilangan
    let jumlah = bilangan1 + bilangan2;

    // Menyimpan hasil pada input hasil
    document.getElementById("hasil").value = jumlah;
}
