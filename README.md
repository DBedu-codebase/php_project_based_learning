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

- `Index.php`:
![Index.php](https://res.cloudinary.com/duvpel2np/image/upload/v1734428070/PHP_PROJECT_BASED_LEARN_ASSETS/indexpage_ygtnzc.png "Index.php")
- `CreateProduct.php`:
![CreateProduct.php](https://res.cloudinary.com/duvpel2np/image/upload/v1734428070/PHP_PROJECT_BASED_LEARN_ASSETS/create-products_gkyfvv.png "CreateProduct.php")
- `EditProduct.php`:
![CreateProduct.php](https://res.cloudinary.com/duvpel2np/image/upload/v1734428070/PHP_PROJECT_BASED_LEARN_ASSETS/update-page_fec3bo.png "CreateProduct.php")
- `Index.php`:
![Index.php](https://res.cloudinary.com/duvpel2np/image/upload/v1734428070/PHP_PROJECT_BASED_LEARN_ASSETS/homeUpdate_ophtbl.png "Index.php")
> **Catatan**: Pastikan data dipassing dengan tepat pada views.

---

## **Optional Logic (Tambahan)**

Tambahkan beberapa **logika tambahan** yang relevan, sesuai dengan materi yang telah diajarkan sebelumnya. Misalnya:
- Tambahkan fitur search, untuk melakukan pencarian berdasarkan `name` dari `Products`. 
- Tambahkan fitur `ascending & descending` pada `Products`, untuk menampilkan list product dari harga yang tertinggi atau terendah.
<!-- --- -->

<!-- ## **Contoh Output Tambahan (Jika Menggunakan Logika)**

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
``` -->

<!-- --- -->

<!-- ## **Markdown File Template** -->

<!-- Detail kriteria lebih lanjut dapat Anda tambahkan pada markdown file project sebagai dokumentasi. Pastikan penjelasan variabel, operasi, dan logika yang digunakan tertulis rapi. -->

---

**Happy Coding! 🚀**  
Selamat mengarungi lautan sintaksis dan jadikan project ini sebagai langkah awal memahami fundamental pemrograman.
