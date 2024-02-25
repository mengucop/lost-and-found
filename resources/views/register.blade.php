<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
    <p>Welcome to the registration page!</p>

    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Your Name">
        <input type="text" name="email" placeholder="Enter Your Email">
        <input type="password" name="password" placeholder="Enter Your Password">
        <input type="submit" value="Register">
    </form>
    <p>
        Already have an account?
        <a href="home">Go login!</a>
    </p>
</body>
</html>