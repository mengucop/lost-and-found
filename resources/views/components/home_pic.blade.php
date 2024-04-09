<h1 class="text-center text-2xl">{{ Str::title($slot) }} Items</h1>
@if(\App\Models\Item::all()->where('type', $slot)->count() > 0)
    <div class="grid grid-flow-col auto-col-max place-contents-evenly p-2">
        @foreach(\App\Models\Item::all()->where('type', $slot) as $item)
        <div>
            <img src="{{ asset('images/'.$item->pic) }}" alt="image" class="w-64 h-64">
            <p>{{ $item->description }}</p>
        </div>
        @endforeach
    </div>
@else
    <p class="text-center italic">No {{ $slot }} items to show</p>    
@endif