<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>ToDoList | Home</title>
</head>
<body>
    <div class="p-4 bg-gray-200 w-screen h-screen">
        <main class="bg-white lg:w-2/4 rounded-xl px-6 py-8 mx-auto">
            <h1 class="text-5xl text-blue-700 font-bold text-center">To Do List</h1>

            <div class="container flex flex-col items-center max-w-screen-md gap-5 mx-auto mt-3">
                <table class="w-full border text-sm text-left text-gray-500 rtl:text-right">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr class="px-6 py-3 text-center border-b">
                            <th class="px-6 py-3 text-center border-x">Activity</th>
                            <th class="px-6 py-3 text-center border-x">Status</th>
                            <th class="px-6 py-3 text-center border-x">Category</th>
                            <th class="px-6 py-3 text-center border-x">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <td class="px-6 py-4 text-center border-x">
                                todo name
                            </td>
                            <td class="px-6 py-4 text-center border-x">todo status</td>
                            <td class="px-6 py-4 text-center border-x">todo category</td>
                            <td class="py-4 text-center  flex gap-1 justify-evenly">
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit" class="px-2 py-2 text-white bg-green-600 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </button>
                                </form>
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit" class="px-2 py-2 text-white bg-orange-600 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </button>
                                </form>
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit" class="px-2 py-2 text-white bg-red-600 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                </table>

                <form action="" method="post" class="flex gap-1">
                    <input type="text" name="todo-item" id="todo-item" class="p-1 bg-gray-100 border-slate-200 border-2 outline-none rounded-md focus:ring-blue-500 focus:ring-2 ring-blue-500">
                    <select name="todo-category" id="todo-category" class="rounded-md bg-slate-200 p-1 border-1 border-slate-200">
                        <option value="1">option 1</option>
                        <option value="2">option 2</option>
                    </select>
                    <button type="submit" class="px-4 py-2 text-white rounded-md bg-violet-700 hover:bg-violet-500">Add Todo</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>