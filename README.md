# **Project Requirement: Personal Information**

Berdasarkan penjelasan di atas, kita telah berhasil membuat project dan melakukan setup-boilerplate. Sebelumnya kita telah belajar mengenai **variabel, tipe data,** dan **operator** dalam materi *Fundamental Bab*. Sekarang, buatlah sebuah project sederhana yang memenuhi kriteria berikut:

---

## **Kriteria Project**

1. **Buat variabel beserta nilainya**, dengan ketentuan berikut:
   - **Name**: Gunakan nama Anda dalam bentuk string.
   - **Age**: Isi variabel umur Anda sebagai integer (bilangan bulat).
   - **birthYear**: Gunakan operasi aritmatika dengan rumus berikut:  
     `currentYear - Age`  
     Pastikan `Age` memiliki tipe data integer.
   - **Status**: Masukkan status Anda, misalnya: `"student"`, `"developer"`, atau lainnya.
   - **Hobi**: Tulis hobi Anda dalam bentuk string.
   - **isYounger**: Gunakan operator perbandingan untuk validasi umur. Contoh:  
     `Age <= 19`  
     Variabel ini harus menghasilkan nilai `true` atau `false`.

---

## **Output Format**

Gunakan fungsi **`echo`** untuk menampilkan informasi dalam format kalimat menggunakan variabel yang telah dibuat. Contoh format kalimat:

```
Name: "$Name"
Age: $Age
Birth Year: $birthYear
Status: "$Status"
Hobi: "$Hobi"
isYounger: $isYounger 
```

> **Catatan**: Pastikan menggunakan variabel dan operator untuk mengisi nilai dalam kalimat tersebut.

---

## **Optional Logic (Tambahan)**

Tambahkan beberapa **logika tambahan** yang relevan, sesuai dengan materi yang telah diajarkan sebelumnya. Misalnya:
- Tambahkan variabel height dengan satuan `cm`.
- Tambahkan variabel weight dengan satuan `kg`.
- konversi height cm menjadi meter: `height/100`
- Implementasikan height satuan meter dengan pangkat: `height*height`
- Implementasikan operator aritmatika untuk menghitung bmi:
`weight/height`
- Implementasikan operator pembandingan, untuk melakukan cek berdasarkan `18.5 - 24.9`, jika berada pada range tersebut maka tampilkan `Ideal: false` dengan menggunakan `vardump` 
---

## **Contoh Output Tambahan (Jika Menggunakan Logika)**

Jika variabel `Ideal` bernilai `true`, berdasarkan kakulator bmi:
```
Name: "$Name"
Age: $Age
Birth Year: $birthYear
Status: "$Status"
Hobi: "$Hobi"
isYounger: $isYounger 
Weight: $Weight
Height: $Height
Ideal: $ideal // berdasarkan hasil kakulator bmi
```

---

## **Markdown File Template**

Detail kriteria lebih lanjut dapat Anda tambahkan pada markdown file project sebagai dokumentasi. Pastikan penjelasan variabel, operasi, dan logika yang digunakan tertulis rapi.

---

**Happy Coding! 🚀**  
Selamat mengarungi lautan sintaksis dan jadikan project ini sebagai langkah awal memahami fundamental pemrograman.
