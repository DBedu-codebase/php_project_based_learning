<?php
require_once '../utils/DateFormat.php';
$filtered = $_SESSION['todoId'][0] ?? [];
$error = $_SESSION['error'] ?? [];
$itemId = $_GET['id'];
$filtered = array_filter($_SESSION['Todos-' . $_SESSION['usersId']['id']], function ($item) use ($itemId) {
     return $item['id'] == $itemId;
});
$filtered = array_values($filtered)[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard Page</title>
     <link rel="icon" href="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" type="image/x-icon">
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
     <header class="antialiased">
          <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
               <div class="flex flex-wrap justify-between items-center">
                    <div class="flex justify-start items-center">
                         <a href="https://flowbite.com" class="flex mr-4">
                              <img src="https://flowbite.s3.amazonaws.com/logo.svg" class="mr-3 h-8" alt="FlowBite Logo" />
                              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                         </a>
                    </div>
                    <div class="flex items-center lg:order-2">
                         <button type="button" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                              <span class="sr-only">Open user menu</span>
                              <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                         </button>
                         <!-- Dropdown menu -->
                         <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown">
                              <div class="py-3 px-4">
                                   <span class="block text-sm text-gray-500 truncate dark:text-gray-400">
                                        <?php echo htmlspecialchars($_SESSION['usersId']['email']) ?>
                                   </span>
                              </div>
                              <ul class="py-1 text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                                   <li>
                                        <form action="/AuthdescriptiontroyControllers" method="post">
                                             <button type="submit" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                  Sign out
                                             </button>
                                        </form>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>
          </nav>
     </header>
     <!--  Main modal -->
     <section class="bg-white dark:bg-gray-900 h-screen">
          <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
               <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update Task</h2>
               <form action="/EditTodoControllers?id=<?= $filtered['id'] ?>" method="post">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                         <div>
                              <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                              <input value="<?= htmlspecialchars($filtered['title']) ?>" type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type task title" required="">
                              <?php if (!empty($error['title'])): ?>
                                   <p class="mt-2 text-sm text-red-600">
                                        <?= htmlspecialchars($error['title']) ?>
                                   </p>
                              <?php endif; ?>
                         </div>
                         <div>
                              <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DueDate</label>
                              <input value="<?php echo formatDateTime($filtered['date']); ?>" type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="11/11/2022" required="">
                              <?php if (!empty($error['date'])): ?>
                                   <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($error['date']) ?></p>
                              <?php endif; ?>
                         </div>
                         <div>
                              <label for="Priority" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Priority</label>
                              <select name="Priority" id="Priority" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                   <option value="<?= htmlspecialchars($filtered['priority']) ?>" selected>
                                        <?= htmlspecialchars($filtered['priority']) ?>
                                   </option>
                                   <option value="High">High</option>
                                   <option value="Medium">Medium</option>
                                   <option value="Low">Low</option>
                              </select>
                              <?php if (!empty($error['priority'])): ?>
                                   <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($error['priority']) ?></p>
                              <?php endif; ?>
                         </div>
                         <div>
                              <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                              <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                   <option value="<?= htmlspecialchars($filtered['category']) ?>" selected>
                                        <?= htmlspecialchars($filtered['category']) ?>
                                   </option>
                                   <option value="Work">Work</option>
                                   <option value="School">School</option>
                                   <option value="Personal">Personal</option>
                              </select>
                              <?php if (!empty($error['category'])): ?>
                                   <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($error['category']) ?></p>
                              <?php endif; ?>
                         </div>
                         <div class="sm:col-span-2">
                              <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your description</label>
                              <textarea name="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here...">
                                   <?= htmlspecialchars($filtered['description']) ?>
                              </textarea>
                              <?php if (!empty($error['description'])): ?>
                                   <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($error['description']) ?></p>
                              <?php endif; ?>
                         </div>
                    </div>
                    <div class="flex items-center space-x-4">
                         <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                              Update Task
                         </button>
                         <form action="/DeleteTodoControllers?id=<?= $data['id'] ?>" method="post">
                              <button type="submit" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                   <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                   </svg>
                                   Delete
                              </button>
                         </form>
                    </div>
               </form>
          </div>
     </section>
</body>

</html>
