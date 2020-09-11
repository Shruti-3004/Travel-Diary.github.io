<?php
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['reviews'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reviews = $_POST['reviews'];
    $f = fopen('data.txt', 'a');

   fwrite($f, "Name: $name\n Email: $email\n Reviews: $reviews\n\n");

   fclose($f);
   // echo '<script>alert("Thank you for posting your review!")</script>';
   // echo "Thank you ".$name." for reviewing my website!";
   echo '<script type="text/javascript">alert("Thank you '.$name.' for reviewing my website!")</script>';
  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        h1, h2, h3{
            text-align: center;
            font-family: 'Dancing Script', cursive;
            font-size: 50px;
            color: #1a1a2e;
        }
        body{
            background-color: #f1f3f8;
            margin: 10px;
        }
        a{
            color: white;
            font-size: 20px;;
        }
        span{
            padding: 0 10px 0 10px;
        }
        form{
            border: 1px solid #ccc;
            margin: auto;
            width: 700px;
            height: 900px;
            background-color: white;
            text-align: center;
            padding: 30px 30px 5px 30px;
        }
        input, textarea{
            width: 100%;
            padding: 10px;
            margin: 10px;
            font-family: 'Dancing Script', cursive;
            font-size: 20px;
            border-bottom: 1px solid #ccc;
            border-top: 0;
            border-right: 0;
            border-left: 0;
        }
        button{
            height: 50px;
            width: 100px;
        }
        .fa {
            padding: 20px;
            font-size: 45px;
            text-align: center;
            text-decoration: none;
        }
        .fa:hover {
            opacity: 0.7;
        }
        .fa-facebook {
            color: #3B5998;
        }
        .fa-twitter {
            color: #55ACEE;
        }
        .fa-instagram{
            color: black;
        }
        .fa-linkedin{
            color: #007bb5;
        }
    </style>
</head>
<body>
    <div style="padding: 20px; text-align: center; background-color: #1a1a2e;">
        <span><a href="TravelDiary.html">TRIPS</a></span>
        <span><a href="aboutme.html">ABOUT ME</a></span>
        <span><a href="contactme.php">CONTACT ME</a></span>
    </div>

    <div style="padding: 20px;">
        <form method="POST">
            <h2 style="font-size: 30px;">Connect with me via following social media handles:</h2>
            <a href="https://www.facebook.com/shruti.amit.agarwal/" target="_blank" class="fa fa-facebook"></a>
            <a href="https://twitter.com/shruti30agarwal" target="_blank" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/shruti30_ag/" target="_blank" class="fa fa-instagram"></a>
            <a href="https://www.linkedin.com/in/shruti-agarwal-529415174/" target="_blank" class="fa fa-linkedin"></a>
            <h1>Reviews</h1>
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="text" placeholder="Age"><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <textarea cols="30" rows="10" name="reviews" placeholder="Reviews for this website" required></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>

    <div style="padding: 20px 20px 20px 20px; text-align: center; background-color: #1a1a2e; font-size: 20px; color: white; margin-top: 30px;">
        © Shruti Agarwal, <script>document.write( new Date().getUTCFullYear() );</script>
    </div>
</body>
</html>
