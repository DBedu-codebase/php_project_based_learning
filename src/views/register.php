<?php
session_start();
require_once '../middleware/AuthHomeMiddleware.php';
authHomeMiddleware();
$error = $_SESSION['error'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register Page</title>
     <link rel="icon" href="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" type="image/x-icon">
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
     <section class="h-screen bg-gray-50 dark:bg-gray-900">
          <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
               <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                    Register Page
               </a>
               <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                         <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                              Create an account
                         </h1>
                         <form class="space-y-4 md:space-y-6" action="/src/controllers/AuthCreateControllers.php" method="post">
                              <div>
                                   <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                   <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                                   <?php if (!empty($error['email'])): ?>
                                        <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($error['email']) ?></p>
                                   <?php endif; ?>
                              </div>
                              <div>
                                   <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                   <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                   <?php if (!empty($error['password'])): ?>
                                        <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($error['password']) ?></p>
                                   <?php endif; ?>
                              </div>
                              <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign up</button>
                         </form>
                    </div>
               </div>
          </div>
     </section>
</body>

</html>