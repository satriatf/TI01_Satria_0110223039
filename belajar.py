usia = 18

if usia < 18:
    keterangan = "anak-anak"
elif 18 <= usia <= 65:
    keterangan = "dewasa"
else:
    keterangan = "lanjut usia"

print("anda adalah",keterangan)

print("-------------------------------------")

angka1 = 300
angka2 = 100

if angka1 > angka2:
    keterangan = f"{angka1} lebih besar dari {angka2}"
elif angka1 < angka2:
    keterangan =  f"{angka2} lebih besar dari {angka1}"
else:
    keterangan = "Kedua angka sama besar"

print(keterangan)

