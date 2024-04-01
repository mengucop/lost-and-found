<!DOCTYPE html>
<html>
<head>
    <title>LF - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    
</head>
<body>
    <div class="bg-sky-200 text-center py-5 text-xl">
        <h1 class="text-3xl">Lost & Found</h1>
        <br><br><br>
        <h4 class="italic">Your Place To Go For All Sorts Of Missing Or Retrieved Items</h4>
    </div>

    <div class="p-20 grid justify-items-center">
        <div>
            <form class="grid justify-items-center" action="{{ route('login') }}" method="post">
                @csrf
                <input class="px-20 py-1 border border-solid border-black" type="email" name="email" placeholder="Enter Your Email">
                <br><br>
                <input class="px-20 py-1 border border-solid border-black" type="password" name="password" placeholder="Enter Your Password">
                <br><br>
                <button class="grid justify-items-center p-4 bg-sky-200 text-center hover:bg-sky-400 " type="submit">Login</button>
            </form>
        </div>
        <div class="p-5">
            <p>Don't have an account? <a class="text-sky-400 underline" href="{{ route('register') }}">Register</a></p>
        </div>
    </div>
</body>                
</html>