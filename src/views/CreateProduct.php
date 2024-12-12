<?php
require_once '../controllers/CreateProducts.php'

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Digital Shopping List</title>
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="">
     <section class="bg-white dark:bg-gray-900">
          <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
               <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
               <form action="../controllers/CreateProducts.php" method="post">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                         <div class="sm:col-span-2">
                              <label for="name"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                   Product Name
                              </label>
                              <input type="text" name="name" id="name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Type product name" required="">
                         </div>
                         <div class="w-full">
                              <label for="brand"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                              <input type="text" name="brand" id="brand"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Product brand" required="">
                         </div>
                         <div class="w-full">
                              <label for="price"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                              <input type="number" name="price" id="price"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="$2999" required="">
                         </div>
                         <div class="sm:col-span-2">
                              <label for="description"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                              <textarea name="description" id="description" rows="8"
                                   class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Your description here"></textarea>
                         </div>
                    </div>
                    <button type="submit"
                         class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                         Add product
                    </button>
               </form>
          </div>
     </section>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</body>

</html>
