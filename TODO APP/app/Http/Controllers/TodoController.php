<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use Validator;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos=auth()->user()->todos()->orderBy('completed')->get();
        //return $todos;
        //$todos=Todo::orderby('completed')->get();
        //return $todos;
        return view('todos.index')->with(['todos'=>$todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function edit($id)
    {
        $todo=Todo::find($id);
        return view('todos.edit',compact('todo'));
    }

    public function store(TodoCreateRequest $request)
    {
    //     $rules=[
    //         'title'=>'required|max:255',
    //     ];
    //     $message=[
    //         'title.max' => 'Todo title should not be greater than 255',
    //     ];

    //     $validator=Validator::make($request->all(),$rules,$message);

    //     if($validator->fails()){
    //         return redirect()->back()
    //         ->withErrors($validator)
    //         ->withInput();
    //     }
        // $request->validate([
          //   'title'=>'required|max:255',
         //]);

          //Todo::create($request->all());
          $todo=auth()->user()->todos()->create($request->all());
          if($request->step){
          foreach ($request->step as $step){
              $todo->steps()->create(['name'=>$step]);
          }
          }
          return redirect(route('todo.index'))->with('message','todo created');
    }

    // public function edit($id)
    // {
    //     $todo=Todo::find($id);
    //     return $todo;
    //     return view('todos.edit');
    // }

    public function update(TodoCreateRequest $request,Todo $todo){

       $todo->update(['title'=>$request->title]);
       return redirect(route('todo.index'))->with('message','updated');
    }


    public function complete(Todo $todo)
    {
        $todo->update(['completed'=>true]);
        return redirect()->back()->with('message','Task marked as completd');
    }

    public function incomplete(Todo $todo)
    {
        $todo->update(['completed'=>false]);
        return redirect()->back()->with('message','Task marked as incompletd');
    }

    public function delete(Todo $todo)
    {
        $todo->steps->each->delete();
        $todo->delete();
        return redirect()->back()->with('message','Task deleted');
    }

    public function show(Todo $todo)
    {
          return view('todos.show',compact('todo'));
    }
}
