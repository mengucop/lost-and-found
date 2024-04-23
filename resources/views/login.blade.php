<x-header>Login</x-header>
<body>
    <x-info><h4 class="italic text-xl">Your Place To Go For All Sorts Of Missing Or Retrieved Items</h4></x-info>

    <div class="p-10 grid justify-items-center">
        <div>
            <form class="grid justify-items-center" action="/" method="post">
                @csrf
                <input class="px-20 py-1 border border-solid border-black" type="email" name="email" placeholder="Enter Your Email">
                <br><br>
                <input class="px-20 py-1 border border-solid border-black" type="password" name="password" placeholder="Enter Your Password">
                <br><br>
                <x-button>Login</x-button>
            </form>
        </div>
        <div class="p-5">
            <p>Don't have an account? <a class="text-sky-400 underline hover:text-sky-600" href="/register">Register</a></p>
        </div>
    </div>
</body>                
</html>