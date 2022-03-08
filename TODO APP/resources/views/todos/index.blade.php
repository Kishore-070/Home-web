
@extends('todos.layout')

@section('content')
<div class="flex justify-between px-4 border-b pb-4">
<h1 class="text-2xl">All TO-DO</h1>
<a href="/todos/create" class=" mx-5 py-2 text-blue-400 cursor-pointer text-white">
    <span class="fas fa-plus-circle"></span>
</a>
</div>
        
        <ul class="my-5">
        <x-alert></x-alert>
        @if($todos->count()>0)
   @foreach($todos as $todo)
    <li class="flex justify-between p-2">
        <div>
        @include('todos.complete')
        </div>
        @if($todo->completed)
     <p class="line-through">{{$todo->title}}</p>
     @else
     <a class="cursor-pointer" href="{{route('todo.show',$todo->id)}}">{{$todo->title}}</a>
     @endif
     <div>
     <a href="{{'/todos/'.$todo->id.'edit'}}" class=" text-orange-400 cursor-pointer text-white"><span class="fas fa-edit px-2"></span></a>

     <span class="fas fa-trash px-2 text-red-500 px-2 cursor-pointer" onclick="event.preventDefault(); if(confirm('Are you really want to delete?.')){document.getElementById('form-delete-{{$todo->id}}').submit()}"></span>

     <form style="display:none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todo.delete',$todo->id)}}">
      @csrf
      @method('delete')
    </form>
     </div>
    </li>
    @endforeach
    @else
        <p>no,task available</p>

    @endif
</ul>
    @endsection
