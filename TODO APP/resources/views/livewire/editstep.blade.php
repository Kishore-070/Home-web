
<div>
<div class="flex justify-center px-4 pb-4">
             <h2 class="text-lg pb-4">Add steps</h2>
            <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor-pointer"></span>
            </div>

            @foreach($steps as $step)
            <div class="flex justify-center py-2" wire:key="{{$loop->index}}">
            <input type="text" name="step[]" class="py-1 px-2 border rounded" placeholder="{{'Describe step '.($loop->index+1)}}" value="{{$step['name']}}">
            <span class="fas fa-times text-red-400 p-2" wire:click="remove({{$loop->index}})"></span>
            </div>
            @endforeach
</div>

