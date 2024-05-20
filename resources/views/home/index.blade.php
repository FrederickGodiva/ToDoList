<x-main>
    <x-slot:title>{{ $title }}</x-slot:title>
        
    <h1 class="text-5xl text-blue-700 font-bold text-center">To Do List</h1>

    <div class="container flex flex-col items-center max-w-screen-md gap-5 ">
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
                @foreach ($todos as $todo)
                    <tr class="bg-white border-b hover:bg-gray-100">
                        <td class="px-6 py-4 text-center border-x">{{ $todo->activity }}</td>

                        <td class="px-6 py-4 text-center border-x">
                            @if ($todo->status == 'DONE')
                                <span class="p-2 text-white bg-green-500 rounded-md">DONE</span>
                            @elseif ($todo->status == 'PENDING')
                                <span class="p-2 text-black bg-yellow-500 rounded-md text-slate-100">PENDING</span>
                            @endif
                        </td>

                        <td class="px-6 py-4 text-center border-x">{{ $todo->category->name }}</td>

                        <td class="py-4 text-center flex gap-1 justify-evenly">
                            <form action="/home/{{ $todo->id }}" method="post">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="px-2 py-2 text-white bg-green-600 rounded-md hover:bg-green-500" aria-label="Mark as Done">
                                    <i data-feather="check"></i>
                                </button>
                            </form>

                            <form action="/home/{{ $todo->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-2 text-white bg-red-600 rounded-md hover:bg-red-500" aria-label="Delete">
                                    <i data-feather="trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form action="/home" method="post" class="flex gap-3">
            @csrf
            <input type="text" name="todo-item" id="todo-item" class="p-1 bg-gray-100 border-slate-200 border-2 outline-none rounded-md focus:ring-blue-500 focus:ring-2 ring-blue-500" placeholder="New Todo">
            <select name="todo-category" id="todo-category" class="rounded-md bg-slate-200 p-1 border-1 border-2 outline-none rounded-md focus:ring-blue-500 focus:ring-2">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="px-4 py-2 text-white rounded-md bg-violet-700 hover:bg-violet-500">Add Todo</button>
        </form>
    </div>
</x-main>
