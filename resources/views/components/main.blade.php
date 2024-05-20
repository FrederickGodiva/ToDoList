<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>
    <title>ToDoList | {{  $title  }}</title>
</head>
<body>
    <div class="p-4 bg-gray-200 w-screen h-screen">
        {{-- @can('login') --}}
        <div class="flex justify-end">    
            <form action="/logout" method="post" class="order-last">
                @csrf
                <button type="submit" class="px-2 py-2 text-white rounded-md bg-red-600 hover:bg-red-500">
                    <i data-feather="power"></i>
                </button>
            </form>
        </div>
        {{-- @endcan --}}

        <main class="bg-white lg:w-2/4 rounded-xl px-6 py-8 mx-auto mt-10 flex flex-col gap-3">
            {{  $slot  }}
        </main>
    </div>

    <script>
        feather.replace();
    </script>
</body>
</html>