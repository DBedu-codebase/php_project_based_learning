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
          <!-- Breadcrumb -->
          <div class="pt-8"></div>
          <nav class="w-1/2 flex align-center justify-center mx-auto  px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
               <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                         <a href="/dashboard" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                              <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                   <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                              </svg>
                              Dashboard
                         </a>
                    </li>
                    <li aria-current="page">
                         <div class="flex items-center">
                              <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                              </svg>
                              <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                                   Update Task
                              </span>
                         </div>
                    </li>
               </ol>
          </nav>
          <!-- Breadcrumb -->
          <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
               <div class="flex flex-row justify-between items-center">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update Task</h2>
                    <form action="/DeleteTodoControllers" method="post">
                         <input type="hidden" name="id" value="<?= $itemId ?>">
                         <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                   <path fill="currentColor" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z" />
                              </svg>
                         </button>
                    </form>
               </div>
               <form action="/EditTodoControllers?id=<?= $filtered['id'] ?>" method="post">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                         <div>
                              <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                              <input value="<?= htmlspecialchars($filtered['title']) ?>" type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type task title" required="">
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
                         <div>
                              <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                   status
                              </label>
                              <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                   <option value="<?= $filtered['isCompleted'] ?>" selected>
                                        <?= htmlspecialchars($filtered['isCompleted'] ? 'Completed' : 'Not Completed') ?>
                                   </option>
                                   <option value="false">Not Completed</option>
                                   <option value="true">Completed</option>
                              </select>
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
                    </div>
               </form>
          </div>
     </section>
</body>

</html>
