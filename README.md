# **Project Requirement: Simple Login System**

Berdasarkan penjelasan di atas, kita telah berhasil membuat project dan melakukan setup-boilerplate. Sebelumnya kita telah belajar mengenai seluruh *Fundamental PHP Curicculum*. 

Sekarang, buatlah sebuah project sederhana yang memenuhi kriteria berikut:

---

## **Kriteria Project**

1. **Buat sebuah Simple Login System dengan implementasi session**, dengan ketentuan berikut:  
- Controllers `AuthCreateControllers.php`:

     Buatlah struktur array asosiatif pada variabel `$newUsers`:
     - id: uniqid()
     - email 
     - password: `password_hash($_POST['password'], PASSWORD_DEFAULT)`, untuk melakukan hash sebuah password
     
     Tambahkan value dari input pengguna, pada function `validateInput()`
     
- Controllers `AuthDestroyControllers.php`:
     - Delete session `usersId`, menggunakan unset.
     - Note: pastikan melakukan validasi, menggunakan `isset` sebelum melakukan delete session.
- Controllers `AuthLoginControllers.php`:
     - Tambahkan value dari input pengguna, pada function `validateUser()`
     - Buatlah kondisional if-else:
          - `if $validateUser`: Delete session `error`, menggunakan unset. 
          - `else`: Buatlah struktur array asosiatif untuk session `$error`:
               - email: 'Please enter your valid email'     
               - password: 'Please enter your valid password'

- Middleware `AuthHomeMiddleware.php`:
     - Buatlah Function Middleware:
          - `authProtectHomeMiddleware()`: Check jika tidak terdapat session `usersId`, dengan `isset`. 
          - `authProtectHomeMiddleware()`: Check terdapat session `usersId`, dengan `isset`.

- Views `login.php`:
     - Delete session `error`, menggunakan unset.
     - Tampilkan data dari session `error`, berdasarkan key value sesuai struktur session `error`.
          - Gunakan `php if (!empty($error['email']))`, untuk memastikan validasi error hanya tampil saat terjadi error.
          - Gunakan `<?= htmlspecialchars($error['password']) ?>`, untuk menampilkan value dari session `error`
- Views `register.php`:
     - Tampilkan data dari session `error`, berdasarkan key value sesuai struktur session `error`.
          - Gunakan `php if (!empty($error['email']))`, untuk memastikan validasi error hanya tampil saat terjadi error.
          - Gunakan `<?= htmlspecialchars($error['password']) ?>`, untuk menampilkan value dari session `error`
- Views `dashboard.php`:
     - Tampilkan data dari session `usersId`
          - Gunakan `<?= htmlspecialchars($_SESSION['usersId']['email']) ?>`, untuk menampilkan email value dari session `usersId`
     - Tampilkan data dari session Todos `$_SESSION['Todos-' . ($_SESSION['usersId']['id'])`
          - Gunakan `<?php foreach ($todos as $todo) : ?>`, untuk menampilkan selusurh Todos value dari session `$_SESSION['Todos-' . ($_SESSION['usersId']['id'])`
          - Gunakan `<?= htmlspecialchars($todo['title']) ?>`, untuk menampilkan Todos value pada HTML-Tag.
- Utils `FormValidation.php`:
     - Implementasikan Function Form Validation:
          - `validateInput()` & `validateTodos`: Implementasikan form validasi yang telah disediakan, untuk melakukan validasi dari input pengguna.
          - `validateUser()`: Implementasikan function `validateUser()` yang telah disediakan, untuk melakukan validasi user akun milik pengguna.

- Utils `DateFormat.php`:
     - Implementasikan Function Date Format:
          - `formatDate()`: Implementasikan function`formatDate()` yang telah disediakan, untuk melakukan format input date pengguna pada saat create-task.
          - `formatDateTime()`: Implementasikan function `formatDateTime()` yang telah disediakan, untuk melakukan format input date pengguna pada saat update-task.
1. **Buat sebuah crud Todo-Task menggunakan array Associative dengan implementasi session**, dengan ketentuan berikut:  
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

- `Sign-up.php`:
![Sign-up.php](https://res.cloudinary.com/duvpel2np/image/upload/v1734500311/PHP_PROJECT_BASED_LEARN_ASSETS/authRegisterValidation_ounknj.png "Sign-up.php")
- `index.php`:
![index.php](https://res.cloudinary.com/duvpel2np/image/upload/v1734500311/PHP_PROJECT_BASED_LEARN_ASSETS/authLogin_ausjxj.png "index.php")
- `Home.php`:
![Home.php](https://res.cloudinary.com/duvpel2np/image/upload/v1734500312/PHP_PROJECT_BASED_LEARN_ASSETS/HomePages_z8kb7v.png "Home.php")
- `Logout Feature`:
![Logout Feature](https://res.cloudinary.com/duvpel2np/image/upload/v1734500312/PHP_PROJECT_BASED_LEARN_ASSETS/logout-feature_zrocjl.png "Logout Feature")
> **Catatan**: Pastikan data dipassing dengan tepat pada views.

---

## **Optional Logic (Tambahan)**

Tambahkan beberapa **logika tambahan** yang relevan, sesuai dengan materi yang telah diajarkan sebelumnya. Misalnya:
- Tambahkan fitur `delete-account`, untuk melakukan delete user berdasarkan id,
dari session `Users` & `usersId`. 
- Tambahkan fitur `forgot-password`, untuk melakukan update password berdasarkan id,
dari session `Users` & `usersId`. 
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
