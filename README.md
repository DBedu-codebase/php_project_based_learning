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
- Public `index.php`:
     - Buatlah Implementasi Middleware, berdasarkan route yang telah disediakan.
- Views `login.php`:
     - Delete session `error`, menggunakan unset.
     - Tampilkan data dari session `error`, berdasarkan key value sesuai struktur session `error`.
          - Gunakan `php if (!empty($error['email']))`, untuk memastikan validasi error hanya tampil saat terjadi error.
          - Gunakan `<?= htmlspecialchars($error['password']) ?>`, untuk menampilkan value dari session `error`
- Views `register.php`:
     - Tampilkan data dari session `error`, berdasarkan key value sesuai struktur session `error`.
          - Gunakan `php if (!empty($error['email']))`, untuk memastikan validasi error hanya tampil saat terjadi error.
          - Gunakan `<?= htmlspecialchars($error['password']) ?>`, untuk menampilkan value dari session `error`
- Utils `FormValidation.php`:
     - Implementasikan Function Form Validation:
          - `validateInput()` & `validateTodos`: Implementasikan form validasi yang telah disediakan, untuk melakukan validasi dari input pengguna.
          - `validateUser()`: Implementasikan function `validateUser()` yang telah disediakan, untuk melakukan validasi user akun milik pengguna.

- Utils `DateFormat.php`:
     - Implementasikan Function Date Format:
          - `formatDate()`: Implementasikan function`formatDate()` yang telah disediakan, untuk melakukan format input date pengguna pada saat create-task.
          - `formatDateTime()`: Implementasikan function `formatDateTime()` yang telah disediakan, untuk melakukan format input date pengguna pada saat update-task.
2. **Buat sebuah crud Todo-Task menggunakan array Associative dengan implementasi session**, dengan ketentuan berikut:  
- Controllers `CreateTodoControllers.php`:

     Buatlah struktur array asosiatif pada variabel `$newTodos`:
     - 'id' => uniqid(),
     - 'title' => $_POST['title'],
     - 'date' => formatDate($_POST['date']),
     - 'priority' => $_POST['Priority'],
     - 'category' => $_POST['category'],
     - 'description' => trim($['description']),
     - 'isCompleted' => false,
     - 'createdAt' => date('Y-m-d H:i:s'),
     - 'updatedAt' => date('Y-m-d H:i:s'),

     Buatlah `$_SESSION['Todos-' . $_SESSION['usersId']['id']][] = $newTodos;`, setelah berhasil membuat data todo.

- Controllers `DeleteTodoAllControllers.php`:
     - Delete session `$_SESSION['Todos-' . $_SESSION['usersId']['id']]`, menggunakan unset
- Controllers `DeleteTodoControllers.php`:
     - Delete data dari `$_SESSION['Todos-' . $_SESSION['usersId']['id']]` berdasarkan `id` menggunakan `foreach unset` atau `array build in function` dari php. 
- Controllers `EditTodoControllers.php`:
     - Get `$_SESSION['Todos-' . $_SESSION['usersId']['id']]` berdasarkan `id` menggunakan `foreach` atau `array_filter`. 
     - Update `$_SESSION['Todos-' . $_SESSION['usersId']['id']]` berdasarkan `id`, berdasarkan value dari input pengguna `$_POST['title']`
     - Update key `updateAt`, menjadi $todo['updatedAt'] = date('Y-m-d H:i:s').
     
- Views `dashboard.php`:
     - Tampilkan data dari session `usersId`
          - Gunakan `<?= htmlspecialchars($_SESSION['usersId']['email']) ?>`, untuk menampilkan email value dari session `usersId`
     - Tampilkan data dari session Todos `$_SESSION['Todos-' . ($_SESSION['usersId']['id'])`
          - Gunakan `<?php foreach ($todos as $todo) : ?>`, untuk menampilkan selusurh Todos value dari session `$_SESSION['Todos-' . ($_SESSION['usersId']['id'])`
          - Gunakan `<?= htmlspecialchars($todo['title']) ?>`, untuk menampilkan Todos value pada HTML-Tag.
          - Gunakan `<?= htmlspecialchars(count($_SESSION['Todos-' . $_SESSION['usersId']['id']] ?? [])) ?>`, untuk menampilkan length of Todos value pada HTML-Tag.

- Views `UpdateTodos.php`:
     - Tampilkan data dari `GetDetails.php`, berdasarkan key value sesuai dari struktur `ProductData`.
     - Passing `id`, pada action yang membutuhkan seperti `edit & delete`  

## **Output Format**

Jalankan program dengan menggunakan **`php -S localhost:9000 -t src/public`** untuk menampilkan program. 

- `register.php`:
![register.php](/src/public/assets/authRegisterValidation.png "register.php")
- `login.php`:
![login.php](https://res.cloudinary.com/duvpel2np/image/upload/v1734500311/PHP_PROJECT_BASED_LEARN_ASSETS/authLogin_ausjxj.png "login.php")
- `dashboard.php`:
![dashboard.php](/src/public/assets/dashboards.png "dashboard.php")
- `Modal Create Todos`:
![modal create todos](/src/public/assets/create-todo.png "modal create todos")
- `UpdateTodos.php`:
![UpdateTodos.php](/src/public/assets/update-task.png "UpdateTodos.php")
- `Logout Feature`:
![Logout Feature](/src/public/assets/sign-out.png "Logout Feature")
- `404 Pages`:
![404 Pages](/src/public/assets/404-error.png "404 Pages")
> **Catatan**: Pastikan data dipassing dengan tepat pada views.

---

## **Optional Logic (Tambahan)**

Tambahkan beberapa **logika tambahan** yang relevan, sesuai dengan materi yang telah diajarkan sebelumnya. Misalnya:
- Tambahkan fitur `delete-account`, untuk melakukan delete user berdasarkan id,
dari session `Users` & `usersId`. 
- Tambahkan fitur `forgot-password`, untuk melakukan update password berdasarkan id,
dari session `Users` & `usersId`. 
- Tambahkan fitur `filter-based-status`, untuk melakukan filter data,
dari session `$_SESSION['Todos-' . ($_SESSION['usersId']['id'])`. 
- Tambahkan fitur `search`, untuk melakukan search data berdasarkan title,
dari `$_SESSION['Todos-' . ($_SESSION['usersId']['id'])`. 
---

## **Contoh Output Tambahan (Jika Menggunakan Filtering & Search)**

- `Filter & Search`:
![Filter & Search](/src/public/assets/404-error.png "Filter & Search")
> **Catatan**: Pastikan data dipassing dengan tepat pada views. 


<!-- ## **Markdown File Template**

 Detail kriteria lebih lanjut dapat Anda tambahkan pada markdown file project sebagai dokumentasi. Pastikan penjelasan variabel, operasi, dan logika yang digunakan tertulis rapi.

--- -->

**Happy Coding! 🚀**  
Selamat mengarungi lautan sintaksis dan jadikan project ini sebagai langkah awal memahami fundamental pemrograman.
