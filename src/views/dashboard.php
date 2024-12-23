<?php
$error = $_SESSION['error'] ?? [];
// unset($_SESSION['todoId']);
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
                                        <form action="/AuthDestroyControllers" method="post">
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
     <section class="h-screen bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
          <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
               <!-- Start coding here -->
               <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                         <div class="w-full md:w-1/2">
                              <form class="flex items-center">
                                   <label for="simple-search" class="sr-only">Search</label>
                                   <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                             <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                             </svg>
                                        </div>
                                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required="">
                                   </div>
                              </form>
                         </div>
                         <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                              <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button"
                                   class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                   <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                   </svg>
                                   New Task
                              </button>
                              <div class="flex items-center space-x-3 w-full md:w-auto">
                                   <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                        <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                             <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                        Actions
                                   </button>
                                   <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <div class="py-1">
                                             <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete all</a>
                                        </div>
                                   </div>
                                   <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                             <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                        </svg>
                                        Filter
                                        <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                             <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                   </button>
                                   <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                        <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
                                        <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                             <li class="flex items-center">
                                                  <input id="default" checked name="brand" type="radio" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                  <label for="default" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">ALL</label>
                                             </li>
                                             <li class="flex items-center">
                                                  <input id="apple" name="brand" type="radio" value="apple" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                  <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Complete</label>
                                             </li>
                                             <li class="flex items-center">
                                                  <input id="microsoft" name="brand" type="radio" value="microsoft" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                  <label for="microsoft" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Incomplete</label>
                                             </li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="overflow-x-auto">
                         <table class="w-full h-auto text-sm text-left text-gray-500 dark:text-gray-400">
                              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                   <tr>
                                        <th scope="col" class="px-4 py-3">Title</th>
                                        <th scope="col" class="px-4 py-3">Category</th>
                                        <th scope="col" class="px-4 py-3">priorityrity</th>
                                        <th scope="col" class="px-4 py-3">Status</th>
                                        <th scope="col" class="px-4 py-3">dueDate</th>
                                        <th scope="col" class="px-4 py-3">Action</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php foreach ($_SESSION['Todos-' . ($_SESSION['usersId']['id'] ?? '')] ?? [] as $todo) : ?>
                                        <tr class="border-b dark:border-gray-700">
                                             <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                  <?= htmlspecialchars($todo['title']) ?>
                                             </th>
                                             <td class="px-4 py-3">
                                                  <?= htmlspecialchars($todo['category']) ?>
                                             </td>
                                             <td class="px-4 py-3">
                                                  <?= htmlspecialchars($todo['priority']) ?>
                                             </td>
                                             <td class="px-4 py-3">
                                                  <?= $todo['isCompleted'] ? 'Done' : 'In Progress' ?>
                                             </td>
                                             <td class="px-4 py-3">
                                                  <?= htmlspecialchars($todo['date']) ?>
                                             </td>
                                             <td class="px-4 py-3 h-auto">
                                                  <div class="relative right-0">
                                                       <button
                                                            id="dropdown-<?= $todo['id'] ?>"
                                                            data-dropdown-toggle="dropdown-toggle-<?= $todo['id'] ?>"
                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                            type="button">
                                                            Dropdown button
                                                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                            </svg>
                                                       </button>

                                                       <!-- Dropdown menu -->
                                                       <div id="dropdown-toggle-<?= $todo['id'] ?>" class="absolute top-0 right-0 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-<?= $todo['id'] ?>">
                                                                 <li>
                                                                      <!-- <form action="/GetTodoIdeControllers?id=<?= $todo['id'] ?>" method="get"> -->
                                                                      <!-- <input type="hidden" name="id" value="<?= $todo['id'] ?>"> -->
                                                                      <!-- <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                                Edit
                                                                           </button>
                                                                      </form> -->
                                                                 </li>
                                                                 <li>
                                                                      <form action="/DeleteTodoControllers" method="post">
                                                                           <input type="hidden" name="id" value="<?= $todo['id'] ?>">
                                                                           <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                                Delete
                                                                           </button>
                                                                      </form>
                                                                 </li>
                                                            </ul>
                                                       </div>
                                                  </div>
                                             </td>
                                        </tr>
                                   <?php endforeach; ?>

                              </tbody>
                         </table>
                    </div>
                    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                         <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                              Showing
                              <span class="font-semibold text-gray-900 dark:text-white">
                                   <?= htmlspecialchars(count($_SESSION['Todos-' . $_SESSION['usersId']['id']] ?? [])) ?>
                              </span>
                              Todos
                         </span>

                    </nav>
               </div>
          </div>
     </section>
     <!--  Main modal -->
     <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
          <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
               <!-- Modal content -->
               <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <!-- Modal header -->
                    <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                         <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                              Add Task
                         </h3>
                         <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                              </svg>
                              <span class="sr-only">Close modal</span>
                         </button>
                    </div>
                    <!-- Modal body -->
                    <form action="/CreateTodoControllers" method="post">
                         <div class="grid gap-4 mb-4 sm:grid-cols-2">
                              <div>
                                   <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                   <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type task title" required="">
                                   <?php if (!empty($error['title'])): ?>
                                        <p class="mt-2 text-sm text-red-600">
                                             <?= htmlspecialchars($error['title']) ?>
                                        </p>
                                   <?php endif; ?>
                              </div>
                              <div>
                                   <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DueDate</label>
                                   <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="11/11/2022" required="">
                                   <?php if (!empty($error['date'])): ?>
                                        <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($error['date']) ?></p>
                                   <?php endif; ?>
                              </div>
                              <div>
                                   <label for="Priority" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Priority</label>
                                   <select name="Priority" id="Priority" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected="">Select Priority</option>
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
                                        <option selected="">Select category</option>
                                        <option value="Work">Work</option>
                                        <option value="School">School</option>
                                        <option value="Personal">Personal</option>
                                   </select>
                                   <?php if (!empty($error['category'])): ?>
                                        <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($error['category']) ?></p>
                                   <?php endif; ?>
                              </div>
                              <div class="sm:col-span-2">
                                   <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                   <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                                   <?php if (!empty($error['description'])): ?>
                                        <p class="mt-2 text-sm text-red-600"><?= htmlspecialchars($error['description']) ?></p>
                                   <?php endif; ?>
                              </div>
                         </div>
                         <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                              <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                              </svg>
                              Add Task
                         </button>
                    </form>
               </div>
          </div>
     </div>
</body>

</html>
