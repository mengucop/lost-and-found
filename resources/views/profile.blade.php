<html>
<head>
    <title>LF - {{ session()->get('student')->name }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="bg-sky-200 text-center py-5 text-xl">
        <h1 class="text-3xl">Lost & Found</h1>
        <br><br><br>
        <h4 class="italic">Your Place To Go For All Sorts Of Missing Or Retrieved Items</h4>
    </div>

    <div class="text-center">
        <li class="text-sky-400 underline hover:text-sky-600">
            <a href="/home/{{ session()->get('student')->username }}"><p>Home</p></a>
        </li>
        <li class="text-sky-400 underline hover:text-sky-600">
            <a href="/logout"><p>Logout</p></a>
        </li>
    </div>

    <h3 class="text-center text-xl">{{ session('student')->name }}'s Stats</h3>
    <div class="p-5 grid place-items-center">
        <table class="">
            <tr>
                <x-row_header>Lost Items</x-row_header>
                <x-row_header>Found Items</x-row_header>
                <x-row_header>Delivered Items</x-row_header>
                <x-row_header>Retrieved Items</x-row_header>
            </tr>
            <tr>
                <x-row_data>{{ session('student')->lost }}</x-row_data>
                <x-row_data>{{ session('student')->found }}</x-row_data>
                <x-row_data>{{ session('student')->found_delivered }}</x-row_data>
                <x-row_data>{{ session('student')->lost_received }}</x-row_data>
            </tr>
        </table>
    </div>

    <h3 class="text-center text-xl">Update Profile</h3>
    <div class="p-5 grid place-items-center">
        <form class="grid justify-items-center" action="/profile/{{ session('student')->username }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Your Name:</label>
            <input class="border border-solid border-black text-center" type="text" name="name" value="{{ session('student')->name }}">
            <br>
            <x-button>Update</x-button>
        </form>
    </div>
</body>
</html>