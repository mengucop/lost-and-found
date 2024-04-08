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
                <label for="desc">Add Description</label>
                <input type="text" name="desc" id="desc" class="border border-black p-2 rounded-lg" required>
            </div>
            <div>
                <label for="image">Add an Image</label>
                <input type="file" name="image" id="image" class="border border-black p-2 rounded-lg" required>
            </div>
            <div>
                <x-button>Upload</x-button>
            </div>
        </div>
    </form>
</body>
</html>