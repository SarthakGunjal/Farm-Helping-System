<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<a class="btn btn-primary" href="index.php" role="button">Home</a> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Feedback</title>
    <link rel="stylesheet" href="style_feedback.css">
</head>

<body>
    
    <div class="contact-form">
        <form id="register" method="post" action="feedback.php">

        <h1>Feedback</h1>

       

        <div class="txtb">
            <label>Full Name :</label>
            <input type="text"    name="Name" id="Name"  placeholder="Enter Your Name" required>
        </div>

        <div class="txtb">
            <label>Email :</label>
            <input type="email" name="Email" id="Email" placeholder="Enter Your Email" required>
        </div>

        <div class="txtb">
            <label>Phone Number :</label>
            <input type="text" name="Phone" id="Phone" placeholder="Enter Your Phone Number" required>
        </div>

        <div class="txtb">
            <label>Feedback :</label>
            <input type="text" name="Message" id="Message" placeholder="Write Your Feedback" required>
        </div>
       
        <a class="btn"><input type="submit" id="sub" ></a>
        </form>
    </div>
</body>

</html>