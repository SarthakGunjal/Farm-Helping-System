<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

<!-- <a class="btn btn-primary" href="index.php" role="button">Home</a> -->

<html>

<head>
    <title>Register Yourself</title>
    <link rel="stylesheet" type="text/css" href="style_register.css">

<body>
    <div class="register">
        <form id="register" method="post" action="registration.php">
            <img src="https://coffeelogin.netlify.app/assets/person.jpg" class="avatar" alt="img">
            <h1>Register Yourself</h1>
            <div>
                <label>First Name</label>
                <input type="text"  name="fname" id="fname" placeholder="Enter First Name" required>
            </div>
            <br>
            <div>
                <label>Last Name</label>
                <input type="text"  name="lname" id="lname" placeholder="Enter Last Name" required>
            </div>
            <br>
            <div>
                <label>Contact Number</label>
                <input type="number" name="number" id="number" placeholder="Enter your Contact Number" required>
            </div>
            <br>
            <div>
                <label>Email</label>
                <input type="email" name="email" id="email" placeholder="gfhg23@" required>
            </div>
            <br>
            <div>
                <label>Password</label>
                <input type="password" name="pname" id="pname" placeholder="Enter your Password" required>
            </div>
            <input type="submit" id="sub">
        </form>

    </div>

</body>
</head>

</html> 