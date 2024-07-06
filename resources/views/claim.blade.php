<x-header>Claims</x-header>
<body>
    <x-info><x-icon></x-icon></x-info>

    <h1 class="text-center text-2xl">Claim Infos</h1>
    @forelse($claims as $claim)
        <div class="border border-gray-400 p-4 my-2">
            <img class="w-20 h-20" src="{{ asset('images/'.$claim->pic) }}" alt="Nothing">
            @if( $claim->claimed_by )
            @else
            @endif
        </div>
    @empty
        <h1>No claim requests</h1>
    @endforelse
</body>
</html>