<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style_login.css">

<body>

    <div class="loginbox">
        <form action="login.php" method="POST">
            <img src="https://coffeelogin.netlify.app/assets/person.jpg" class="avatar" alt="img">
            <h1>Login Here</h1>
            <p>Email</p>
            <input type="email" placeholder="Enter email" name="email">
            <p>Password</p>
            <input type="password"  placeholder="Enter Password" name="password">
            <input type="submit"  value="Login">
            <!-- <a href="#">Lost your password?</a><br> -->
            <a href="reg.php">Don't have an account?</a>
        </form>

    </div>

</body>
</head>

</html>