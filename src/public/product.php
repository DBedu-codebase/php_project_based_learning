<?php
session_start();
$ProductData = $_SESSION['ProductData'] ?? [];
$count = count($ProductData ?? []);
var_dump($ProductData);
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Product</title>
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
     <section class="bg-gray-50 dark:bg-gray-900 h-screen p-3 sm:p-5">
          <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
               <!-- Start coding here -->
               <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                         <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                              <a href="add.php" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                   <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                   </svg>
                                   Add product
                              </a>
                              <div class="flex items-center space-x-3 w-full md:w-auto">
                                   <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                        <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                             <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                        Actions
                                   </button>
                                   <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                        </ul>
                                        <div class="py-1">
                                             <a href="deleteAll.php" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete all</a>
                                        </div>
                                   </div>
                                   <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                        <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
                                        <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                             <li class="flex items-center">
                                                  <input id="apple" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                  <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Apple (56)</label>
                                             </li>
                                             <li class="flex items-center">
                                                  <input id="fitbit" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                  <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Microsoft (16)</label>
                                             </li>
                                             <li class="flex items-center">
                                                  <input id="razor" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                  <label for="razor" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Razor (49)</label>
                                             </li>
                                             <li class="flex items-center">
                                                  <input id="nikon" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                  <label for="nikon" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nikon (12)</label>
                                             </li>
                                             <li class="flex items-center">
                                                  <input id="benq" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                  <label for="benq" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">BenQ (74)</label>
                                             </li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="overflow-x-auto">
                         <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                   <tr>
                                        <th scope="col" class="px-4 py-3">Product name</th>
                                        <th scope="col" class="px-4 py-3">Brand</th>
                                        <th scope="col" class="px-4 py-3">Description</th>
                                        <th scope="col" class="px-4 py-3">Price</th>
                                        <th scope="col" class="px-4 py-3">Edit</th>
                                        <th scope="col" class="px-4 py-3">Delete</th>

                                   </tr>
                              </thead>
                              <tbody class="pt-20">
                                   <?php foreach ($ProductData as $key => $value) : ?>
                                        <tr class=" border-b dark:border-gray-700">
                                             <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                  <?= htmlspecialchars($value['name']) ?>
                                             </th>
                                             <td class="px-4 py-3">
                                                  <?= htmlspecialchars($value['brand']) ?>
                                             </td>
                                             <td class="px-4 py-3">
                                                  <?= htmlspecialchars($value['description']) ?>
                                             </td>
                                             <td class="px-4 py-3">
                                                  <?= htmlspecialchars($value['price']) ?>
                                             </td>
                                             <td class="px-4 py-3">
                                                  <a id="<?= $value['id']; ?>" name="<?= $value['id']; ?>" href="edit.php?id=<?= $value['id']; ?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                       Edit
                                                  </a>
                                             </td>

                                             <td class="px-4 py-3">
                                                  <a id="<?= $value['id']; ?>" name="<?= $value['id']; ?>" href="deleteId.php?id=<?= $value['id']; ?>" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                                                       delete
                                                  </a>
                                             </td>
                                        </tr>
                                   <?php endforeach ?>
                              </tbody>
                         </table>
                    </div>
                    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                         <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                              Showing
                              <span class="font-semibold text-gray-900 dark:text-white">
                                   <?php echo $count; ?>
                              </span>
                              Products
                         </span>
                    </nav>
               </div>
          </div>
     </section>
</body>

</html>
