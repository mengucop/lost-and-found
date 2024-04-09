<x-header>Homepage</x-header>
<body>
    <x-info></x-info>
    
    <div  class="text-center">
        <li class="text-sky-400 underline hover:text-sky-600">
            <a href="/profile/{{ session()->get('student')->username }}"><p>Profile</p></a>
        </li>
        <li class="text-sky-400 underline hover:text-sky-600">
            <a href="/logout"><p>Logout</p></a>
        </li>
    </div>

    <x-home_pic>missing</x-home_pic>
    <x-home_pic>retrieved</x-home_pic>

    <form action="/home/{{ session('student')->username }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="p-20 grid justify-items-center">
            <div>
                <label for="type">Type</label>
                <select name="type" id="type" class="border border-black p-2 rounded-lg" required>
                    <option value="missing">Missing</option>
                    <option value="retrieved">Retrieved</option>
                </select>
            </div>
            <div>
                <label for="description">Add Description</label>
                <input type="text" name="description" id="description" class="border border-black p-2 rounded-lg" required>
            </div>
            <div>
                <label for="pic">Add an Image</label>
                <input type="file" name="pic" id="pic" class="border border-black p-2 rounded-lg" required>
            </div>
            <div>
                <x-button>Upload</x-button>
            </div>
        </div>
    </form>
</body>
</html>