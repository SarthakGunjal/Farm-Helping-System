<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<a class="btn btn-primary" href="index.php" role="button">Home</a> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style_contactform.css">
</head>

<body>
    <!-- <div class="col-sm-7" style="text-align:center; padding-top:5px;">
          <div>
            <ul class="soclass">
              <li><a href="http://www.facebook.com/Agriculture.News.jobs" target="_blank" rel="follow"><img
                    src="../../images/FB.png" alt="Agriculture News.Jobs" /></a></li>
              <li><a href="https://www.linkedin.com/company/indiaagronet.com" target="_blank" rel="follow"><img
                    src="../../images/linkedin.png" alt="Agriculture Jobs" /></a></li>
              <li><a href="https://twitter.com/IndiaAgroNet" target="_blank" rel="follow"><img
                    src="../../images/Twitter_logo.png" alt="India agriculture News" /></a></li>
              <li><a href="https://plus.google.com/+IndiaagronetAgriculturenews/posts" target="_blank" rel="follow"><img
                    src="../../images/google_plus.png" alt="Agriculture News"></a></li>
            </ul>
          </div>
        </div> -->
    <div class="contact-form">
         <form id="register" method="post" action="contact.php">
        <h1>Contact Us</h1>
        <div class="txtb">
            <label>Full Name :</label>
            <input type="text" name="name" id="name" value="" placeholder="Enter Your Name">
        </div>

        <div class="txtb">
            <label>Email :</label>
            <input type="email" name="email" id="email" value="" placeholder="Enter Your Email">
        </div>

        <div class="txtb">
            <label>Phone Number :</label>
            <input type="text" name="phone" id="phone" value="" placeholder="Enter Your Phone Number">
        </div>

        <!-- <div class="txtb">
            <label>Message :</label>
            <textarea></textarea>
        </div> -->
        <a class="btn"><input type="submit" id="sub" ></a>
       </form>
    </div>
</body>

</html>