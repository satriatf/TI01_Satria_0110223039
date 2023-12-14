function hitungNilaiDolar() {
    // Mengambil nilai dari input uangRupiah
    let uangRupiah = document.getElementById("uangRupiah").valueAsNumber || 0;

    // Kurs 1 dolar ke rupiah
    let kursDolar = 14650;

    // Menghitung nilai dolar
    let nilaiDolar = uangRupiah / kursDolar;

    // Menyimpan hasil pada elemen dengan id nilaiDolar
    document.getElementById("nilaiDolar").textContent = nilaiDolar.toFixed(2);
}
