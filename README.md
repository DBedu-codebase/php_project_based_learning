# **Project Requirement: Simple CLI Caculator**

Berdasarkan penjelasan di atas, kita telah berhasil membuat project dan melakukan setup-boilerplate. Sebelumnya kita telah belajar mengenai **function, parameter & argumen,** dan **arrow function** dalam materi *Fundamental Bab. Bermain dengan function*.  Sekarang, buatlah sebuah project sederhana yang memenuhi kriteria berikut:

---

## **Kriteria Project**

1. **Buat function beserta parameter argument dengan implementasi aritmatika**, dengan ketentuan berikut:
     - Pastikan setiap function memiliki `default value parameter`, dengan `nilai 1`.  
     - Buatlah sebuah function `sum`, yang memiliki fungsi untuk melakukan pertambahan antara dua parameter.  
     - Buatlah sebuah function `subtract`, yang memiliki fungsi untuk mengurangi antara dua parameter.
     - Buatlah sebuah function `divide`, yang memiliki fungsi untuk pembagian antara dua parameter.  
     - Buatlah sebuah function `multiply`, yang memiliki fungsi untuk perkalian antara dua parameter.  
     - Pastikan menampilkan informasi dalam format CLI dengan maksimal `dua input number`, dengan comand template yang telah disediakan.
---

## **Output Format**

Gunakan fungsi **`echo`** untuk menampilkan hasil dari  informasi function. Contoh format kalimat:

```js
=== Program Kakulator Sederhana ===
Ketik 'add' untuk menambahkan input number.
Ketik 'x' untuk keluar.
Ketik 'sum' untuk menjumlahkan item.
Ketik 'subtract' untuk mengurangi item.
Ketik 'divide' untuk membagi item.
Ketik 'multiply' untuk mengalikan item.

Masukkan perintah Anda: add
Masukkan item untuk ditambahkan (ketik 'exit' untuk kembali ke menu utama): 1
Daftar item saat ini:
1 - 1
Masukkan item untuk ditambahkan (ketik 'exit' untuk kembali ke menu utama): 1
Daftar item saat ini:
1 - 1
2 - 1
Masukkan item untuk ditambahkan (ketik 'exit' untuk kembali ke menu utama): 1
Daftar item sudah penuh.

Masukkan perintah Anda: sum
2
```

> **Catatan**: Pastikan menggunakan variabel dan operator untuk mengisi nilai dalam kalimat tersebut.

---

## **Optional Logic (Tambahan)**

Tambahkan beberapa **logika tambahan** yang relevan, sesuai dengan materi yang telah diajarkan sebelumnya. Misalnya:
- Tambahkan validasi `is_numeric`, untuk melakukan validasi tipe data tersebut sebelum melakukan eksekusi function. 

---

## **Contoh Output Tambahan (Jika Menggunakan Logika)**

Jika nilai input bukan sebuah angka, maka akan menampilkan hasil berikut:
```js
=== Program Kakulator Sederhana ===
Ketik 'add' untuk menambahkan input number.
Ketik 'x' untuk keluar.
Ketik 'sum' untuk menjumlahkan item.
Ketik 'subtract' untuk mengurangi item.
Ketik 'divide' untuk membagi item.
Ketik 'multiply' untuk mengalikan item.

Masukkan perintah Anda: add
Masukkan item untuk ditambahkan (ketik 'exit' untuk kembali ke menu utama): saasa
Masukan angka yang valid. // menampilkan response

Masukkan perintah Anda:
```

<!-- --- -->

<!-- ## **Markdown File Template** -->

<!-- Detail kriteria lebih lanjut dapat Anda tambahkan pada markdown file project sebagai dokumentasi. Pastikan penjelasan variabel, operasi, dan logika yang digunakan tertulis rapi. -->

---

**Happy Coding! 🚀**  
Selamat mengarungi lautan sintaksis dan jadikan project ini sebagai langkah awal memahami fundamental pemrograman.
