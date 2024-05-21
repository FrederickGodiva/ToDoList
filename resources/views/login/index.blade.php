<x-main>
    <x-slot:title>{{  $title  }}</x-slot:title>

    <h1 class="text-5xl text-blue-700 font-bold text-center">Please Login</h1>

    <form action="" method="post" class="mt-3 flex flex-col gap-4">
        @csrf
        <div class="flex flex-col">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="username" class="py-1 px-2 rounded-md border-slate-200 border-2 outline-none rounded-md focus:ring-blue-500 focus:ring-2" value="{{  old('username')  }}">
        </div>
        
        <div class="flex flex-col">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="********" class="py-1 px-2 rounded-md border-slate-200 border-2 outline-none rounded-md focus:ring-blue-500 focus:ring-2">
        </div>
        
        @if (session('loginError'))
            <p class="text-red-500 font-semibold">Login Failed! Please check your username and password</p>
        @endif
        <button type="submit" class="bg-green-600 rounded-md text-white text-2xl font-semibold py-1 hover:bg-green-500">Login</button>
    </form>

    <p class="text-sm text-center mt-1">don't have an account? <a href="/register" class="text-blue-500 hover:underline">register</a></p>
</x-main>