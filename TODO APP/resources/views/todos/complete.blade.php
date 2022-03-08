@if($todo->completed)
     <span class="fas fa-check px-2 text-green-400 px-2 cursor-pointer" onclick="event.preventDefault();document.getElementById('form-incomplete-{{$todo->id}}').submit()"></span>

     <form style="display:none" id="{{'form-incomplete-'.$todo->id}}" method="post" action="{{route('todo.incomplete',$todo->id)}}">
      @csrf
      @method('delete')
    </form>
     @else
     <span onclick="event.preventDefault();document.getElementById('form-complete-{{$todo->id}}').submit()" class="fas fa-check px-2 text-gray-300 cursor-pointer"></span>
      <form style="display:none" id="{{'form-complete-'.$todo->id}}" method="post" action="{{route('todo.complete',$todo->id)}}">
      @csrf
      @method('put')
    </form>
     @endif