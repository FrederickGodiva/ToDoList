<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Todo;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> 91941c7 (feat: convert to laravel 10)

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::where('user_id', auth()->user()->id)->get();
        $categories = Category::all();

        return view('home.index', [
            'title' => 'Home',
            'todos' => $todos,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newTodoActivity = $request->input('todo-item');
        $status = 'PENDING';
        $todoCategory = $request->input('todo-category');
        $userId = auth()->user()->id;
        
        Todo::create([
            'activity' => $newTodoActivity,
            'status' => $status,
            'category_id' => $todoCategory,
            'user_id' => $userId
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $todo->update(['status' => 'DONE']);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->destroy($todo->id);
        return redirect()->back();
    }
}