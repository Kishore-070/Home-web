@extends('todos.layout')

@section('content')

      <div class="flex justify-between px-4 border-b pb-4">
      <h1 class="text-2xl pb-4">TO-DO</h1>
    <a href="/todos" class=" mx-5 py-2 text-gray-400 cursor-pointer text-white">
    <span class="fas fa-arrow-left"></span>
</a>
</div>

        <x-alert></x-alert>
        <form action="/todos/create"  method="post" class="py-5">
            @csrf 
            <div class="py-1">
            <input type="text" name="title" class="py-3 px-2 border rounded" placeholder="Title">
            </div>
            <div class="py-1">
            <textarea name="description" class="p-2 rounded border" placeholder="Description"></textarea>
            </div>
            <div class="py-2">
    
            @livewire('step')
            
            </div>

            <div class="py-1">
            <input type="submit" value="create" class="p-2 border rounded-lg">
            </div>
        </form>
    

@endsection