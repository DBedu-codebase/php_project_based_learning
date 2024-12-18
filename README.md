# **Project Requirement: Simple Login System**

Berdasarkan penjelasan di atas, kita telah berhasil membuat project dan melakukan setup-boilerplate. Sebelumnya kita telah belajar mengenai **Kombinasi-kombinasi kondisional, 
Looping** dan **Error-Handling** dalam materi *Fundamental Bab. SANG PENGATUR PROGRAM*. 

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

- Views `index.php`:
     - Delete session `error`, menggunakan unset.
     - Tampilkan data dari session `error`, berdasarkan key value sesuai struktur session `error`.
          - Gunakan `php if (!empty($error['email']))`, untuk memastikan validasi error hanya tampil saat terjadi error.
          - Gunakan `<?= htmlspecialchars($error['password']) ?>`, untuk menampilkan value dari session `error`
- Views `Sign-up.php`:
     - Tampilkan data dari session `error`, berdasarkan key value sesuai struktur session `error`.
          - Gunakan `php if (!empty($error['email']))`, untuk memastikan validasi error hanya tampil saat terjadi error.
          - Gunakan `<?= htmlspecialchars($error['password']) ?>`, untuk menampilkan value dari session `error`
- Views `Home.php`:
     - Tampilkan data dari session `usersId`
          - Gunakan `<?= htmlspecialchars($_SESSION['usersId']['email']) ?>`, untuk menampilkan email value dari session `usersId`

- Utils `FormValidation.php`:
     - Buatlah Function Form Validation:
          - `validateInput()`: Buatlah validasi dengan ketentuan berikut: 
               - username: 
                    - `if`: input username kosong, maka tampilkan `'Email is required'`
                    - `elseif`: input username tidak valid, maka tampilkan `'Please enter your valid mail'`. Gunakan `!filter_var($username, FILTER_VALIDATE_EMAIL)`, untuk melakukan validasi email.                    
                    - `elseif`: input username telah digunakan, maka tampilkan `'Email already exists'`. Gunakan `isset, array_search & array_column` atau bisa menggunakan looping, untuk melakukan email sudah digunkan atau belum.
               - password: 
                    - `if`: input password kosong, maka tampilkan `'Password is required'`
                    - `elseif`: input password kurang dari 8 karakter, maka tampilkan `'Password must be at least 8 characters
          - Pada`validateUser()`, buatlah sebuah looping pada session `$_SESSION['Users']`, kemudian lakukan validasi berikut: 
               - `if $user['email'] == $username && password_verify($password, $user['password'])`
               - Maka assign session `usersId` dengan nilai dari value `$user`
               - Terakhir return true, untuk mengembalikan nilai bahwa telah berhasil mendapatkan data user pada session.

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
