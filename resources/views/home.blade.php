<x-header>Homepage</x-header>
<body>
    <x-info><x-icon></x-icon></x-info>

    <x-home_pic>missing</x-home_pic>
    <x-home_pic>retrieved</x-home_pic>

    <h1 class="text-center text-2xl">Post Any Item</h1>
    <form action="/home/{{ session('student')->username }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="p-5 grid justify-items-center">
            <div>
                <label for="type">Type:</label>
                <select name="type" id="type" class="border border-black p-2 rounded-lg" required>
                    <option value="missing">Missing</option>
                    <option value="retrieved">Retrieved</option>
                </select>
            </div>
            <div>
                <label for="description">Add Description:</label>
                <input type="text" name="description" id="description" class="border border-black p-2 rounded-lg" required>
            </div>
            <div>
                <label for="pic">Add an Image:</label>
                <input type="file" name="pic" id="pic" class="border border-black p-2 rounded-lg" required>
            </div>
            <br>
            <div>
                <x-button>Upload</x-button>
            </div>
        </div>
    </form>
</body>
</html>