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

    <div>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <input class="border" type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
    


</body>                
</html>