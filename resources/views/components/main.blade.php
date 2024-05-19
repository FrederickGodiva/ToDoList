<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>ToDoList | {{  $title  }}</title>
</head>
<body>
    <div class="p-4 bg-gray-200 w-screen h-screen">
        <main class="bg-white lg:w-2/4 rounded-xl px-6 py-8 mx-auto mt-10">
            {{  $slot  }}
        </main>
    </div>
</body>
</html>