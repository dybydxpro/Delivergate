<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //View All   : Done
    public function index(){
        $todo = Todo::all();
        return view('index', compact('todo','todo'));
    }

    //View One   : Done
    public function view($id){
        $todo = Todo::Find($id);
        return view('show', compact('todo','todo'));
    }

    //Insert New  : Done
    public function create(){
        return view('create');
    }

    public function insert(Request $request){
        $todo = new Todo;
        $data = $request->all();
        $todo->title = $data['title'];
        $todo->description = $data['description'];
        $todo->date = $data['date'];
        $todo->time = $data['time'];
        $todo->save();
        return redirect()->route('todo.index');
    }

    //Update Task  : Done
    public function edit($id){
        $todo = Todo::find($id);
        return view('edit', compact('todo','todo'));
    }

    public function update(Request $request, $id){
        $todo = Todo::find($id);
        $data = $request->all();
        $todo->update($data);
        return redirect()->route('todo.index');
    }

    //Delete Task  : Done
    public function destroy($id){
        $todo = Todo::Find($id);
        $todo -> delete();
        return redirect()->route('todo.index');
    }
}
