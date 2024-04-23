<x-header>{{ session('pic')->pic }}</x-header>
<body>
    <x-info><x-icon></x-icon></x-info>

    <h1 class="text-center text-2xl">Item Details</h1>
    <div class="grid grid-row-2 gap-2">
        <div>
            <img class="w-32 h-32" src="{{ asset('images/'.session('pic')->pic) }}" alt="Nothing">
        </div>
        <div>
            <p>Type: {{ Str::title(session('pic')->type) }}</p>
            <p>From: {{ \App\Models\Student::where('email', session('pic')->from)->first()->name }}</p>
            <p>Uploaded At: {{ session('pic')->created_at }}</p>
            <p>Status: {{ session('pic')->status }}</p>
            <p>Description: {{ session('pic')->description }}</p>
            @if(session('student')->email != session('pic')->from)
                <x-button>Claim</x-button>   
            @else
                <a href={{ "/delete/".session('pic')->pic }}><x-delete_button>Delete</x-delete_button></a>
            @endif
        </div>
    </div>
    
    {{-- <p>{{ $pic }}</p> --}}
</body>