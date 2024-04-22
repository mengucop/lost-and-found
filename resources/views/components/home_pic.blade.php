<h1 class="text-center text-2xl">{{ Str::title($slot) }} Items</h1>
@if(\App\Models\Item::all()->where('type', $slot)->count() > 0)
    <table class="p-5 grid place-items-center">
        <tr>
            <x-row_header>Image</x-row_header>
            <x-row_header>Description</x-row_header>
            <x-row_header>Posted By</x-row_header>
            <x-row_header>Action</x-row_header>
        </tr>
        @foreach(\App\Models\Item::all()->where('type', $slot) as $item)
        <tr>
            
            <x-row_data><a href="/home/{{ session('student')->username }}/{{ $item->pic }}"><img src="{{ asset('images/'.$item->pic) }}" alt="image" class="w-20 h-20"></a></x-row_data>
            <x-row_data>{{ $item->description }}</x-row_data>
            <x-row_data>{{ \App\Models\Student::where('email', $item->from)->first()->name }}</x-row_data>
            <td class="p-2 border border-solid border-black text-center">
                @if(session('student')->email == $item->from)
                    <a href="/delete/{{ $item->pic }}"><x-delete_button>Delete</x-delete_button></a>
                @else
                    <a href="/claim/{{ $item->pic }}"><x-button>Claim</x-button></a>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
@else
    <p class="text-center italic">No {{ $slot }} items to show</p>    
@endif