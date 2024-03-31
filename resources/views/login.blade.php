<!DOCTYPE html>
<html>
<head>
    <title>Lost and Found - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    
</head>
<body>
    <div class="bg-sky-200 text-center py-5 text-xl">
        <h1 class="text-3xl">Lost and Found</h1>
        <br><br><br>
        <h4 class="italic">Your Place To Go For All Sorts Of Missing Or Retrieved Items</h4>
    </div>

    <div class="justify-center">
        <form  action="{{ route('login') }}" method="post">
            @csrf
            <input class="border border-solid border-black" type="email" name="email" placeholder="Enter Your Email">
            <br><br>
            <input class="border border-solid border-black" type="password" name="password" placeholder="Enter Your Password">
            <br><br>
            <button class="p-4 bg-sky-200 text-center hover:bg-sky-400 " type="submit">Login</button>
        </form>
    </div>
    
</body>                
</html>