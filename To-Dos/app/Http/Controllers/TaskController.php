<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\todo;

class TaskController extends Controller
{
    public function index(){
        $tasks = todo:: 
        orderBy('completed_at')
        ->orderBy('id', 'DESC')
        -> get();
        
        return view('Tasks.index',['tasks' => $tasks,] );
    }


    public function create(){
        return view('Tasks.create');
    }

    public function store() {
        request()->validate([
            'description' => 'required|max:255',
        ]);

       $task = todo::create([
        'description' => request('description'),
       ]);
       return redirect('/');
}
    public function update($id){
        $task= todo::where('id', $id)->first();
        $task->completed_at = now();
        $task->save();
        return redirect('/');
    }
    public function delete($id){
        $task =todo:: where('id', $id)->first();
        $task->delete();
        return redirect ('/');
    }
}