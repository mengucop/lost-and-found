<x-header>{{ session('student')->name }}</x-header>
<body>
    <x-info><x-icon></x-icon></x-info>

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

    <h3 class="text-center text-xl">Delete Profile</h3>
    <div class="p-5 grid place-items-center">
        <a href="/profile/{{ session('student')->username }}/delete"><x-delete_button>Delete</x-delete_button></a>
    </div>
</body>
</html>