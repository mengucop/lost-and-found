<x-header>Claims</x-header>
<body>
    <x-info><x-icon></x-icon></x-info>

    <h1 class="text-center text-2xl">Claim Infos</h1>

    @if(\App\Models\Claim::where("claimed_to", session("student")->email)
    ->orWhere("claimed_by", session("student")->email)
    ->count() > 0)
        @foreach(\App\Models\Claim::where("claimed_to", session("student")->email)->orWhere("claimed_by", session("student")->email)->first() as $claim)
            <p>{{ $claim }}</p>
        @endforeach
    @else
        <p class="text-center italic">No claims found</p>
    @endif
</body>
</html>