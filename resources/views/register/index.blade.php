<x-main class="my-auto">
    <x-slot:title>{{  $title  }}</x-slot:title>

    <h1 class="text-5xl text-blue-700 font-bold text-center">Please Register</h1>

    <form action="" method="post" class="mt-3 flex flex-col gap-4">
        @csrf
        <div class="flex flex-col">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="username" class="p-1 rounded-md border-slate-200 border-2 outline-none rounded-md focus:ring-blue-500 focus:ring-2 ring-blue-500">
        </div>
        
        <div class="flex flex-col">    
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="********" class="p-1 rounded-md border-slate-200 border-2 outline-none rounded-md focus:ring-blue-500 focus:ring-2 ring-blue-500">
        </div>
            
        <div class="flex flex-col">    
            <label for="password-confirm">Confirm Password</label>
            <input type="password" name="password-confirm" id="password-confirm" placeholder="********" class="p-1 rounded-md border-slate-200 border-2 outline-none rounded-md focus:ring-blue-500 focus:ring-2 ring-blue-500">
        </div>
            
        <button type="submit" class="bg-sky-500 rounded-md text-white text-2xl font-semibold py-1">Register</button>
    </form>

    <p class="text-sm text-center mt-1">already have an account? <a href="/login" class="text-blue-500 hover:underline">log in to your account</a></p>
</x-main>