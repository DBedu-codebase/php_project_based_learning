# **Project Requirement: Digital Shopping List**

Berdasarkan penjelasan di atas, kita telah berhasil membuat project dan melakukan setup-boilerplate. Sebelumnya kita telah belajar mengenai **array, manipulasi array dengan `foreach`,** dan **Associative array** dalam materi *Fundamental Bab. Bukan sembarang data*.  Sekarang, buatlah sebuah project sederhana yang memenuhi kriteria berikut:

---

## **Kriteria Project**

1. **Buat sebuah crud menggunakan array Associative dengan implementasi session**, dengan ketentuan berikut:  
- Controllers `CreateProducts.php`:

     Buatlah struktur array asosiatif pada variabel `$newProduct`:
     - id: uniqid()
     - name
     - brand
     - description
     - price   
- Controllers `DeleteAllProducts.php`:
     - Delete session `ProductData`, menggunakan unset
- Controllers `DeleteProducts.php`:
     - Delete data dari `ProductData` berdasarkan `id` menggunakan `foreach unset` atau `array build in function` dari php. 
- Controllers `GetDetails.php`:
     - Get `ProductData` berdasarkan `id` menggunakan `foreach` atau `array_filter`. 
- Controllers `GetProducts.php`:
     - Get all data dari `ProductData` dan hitung length_of_array `ProductData` dengan menggunakan `count`.
- Controllers `PutProducts.php`:
     - Get `ProductData` berdasarkan `id` menggunakan `foreach` atau `array_filter`. 
     - Update `ProductData` berdasarkan `id`, berdasarkan value dari input pengguna `$_POST['name']`

- Views `index.php`:
     - Tampilkan seluruh data dari `GetProducts.php`, menggunakan `foreach` & `echo`.
     - Pastikan data dari `foreach`, di render secara tepat.
- Views `EditProduct.php`:
     - Tampilkan data dari `GetDetails.php`, berdasarkan key value sesuai dari struktur `ProductData`.
     - Passing `id`, pada action yang membutuhkan seperti `edit & delete`  

## **Output Format**

Jalankan program dengan menggunakan **`php -S localhost:9000`** untuk menampilkan program. 
Contoh format kalimat:

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
