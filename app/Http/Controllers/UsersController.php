<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Todos;

class UsersController
{
    public function index()
    {
        $todos = Todos::where('user', Auth::guard('users')->id())->paginate(10);
        return view('users.index', compact('todos'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required',
        ]);

        $lastTodo = Todos::where('user', Auth::guard('users')->id())->orderBy('todos_id', 'desc')->first();

        if (!$lastTodo) {
            $nextID = 'T0001';
        } else {
            $lastID = substr($lastTodo->todos_id, 1);
            $nextID = 'T' . str_pad($lastID + 1, 4, '0', STR_PAD_LEFT);
        }

        $todos = new Todos();
        $todos->todos_id = $nextID;
        $calon->todo = $request->todo;
        $calon->save();

        return redirect()->route('users.index')->with('success', 'Task berhasil ditambahkan');
    }

    public function edit($id)
    {
        $todo = Todos::where('user', Auth::guard('users')->id())->findOrFail($id);
        return view('users.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'todo' => 'required',
        ]);

        $todos = Todos::where('user', Auth::guard('users')->id())->findOrFail($id);

        $todos->todo = $request->todo;
        $todos->save();

        return redirect()->route('users.index')->with('success', 'Task berhasil diperbarui');
    }

    public function destroy($id)
    {
        $todo = Todos::where('user', Auth::guard('users')->id())->findOrFail($id);
        $todo->delete();
        return redirect()->route('users.index')->with('success', 'Task berhasil dihapus.');
    }
}
