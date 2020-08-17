<?php

session_start();

$useremail = $_SESSION['email'];

if($useremail == "")
{
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container font-weight-bold bg-light">
  <div class="jumbotron col-md-12" style="margin:20px10px;">
    <h3 class="pb-4 text-center" style="font-family:cursive; color:red;">Welcome User In My Dashboard Page</h3>
    <div class="pb-4 mr-4 text-center">
            <input type="button" class="btn btn-primary col-md-2 mr-2" onclick="window.location.href='register.php'" value="Register">
            <input type="button" class="btn btn-info col-md-2 mr-2" onclick="window.location.href='logout.php'" value="Logout">
    </div>
    <div class="row">
        <img src="welcome1.png" alt="..." class="img-thumbnail col-md-6">
        <img src="welcome.jpg" alt="..." class="img-thumbnail col-md-6">
    </div>
    <h3 class="pt-4 text-center">Welcome : <span class="text-danger"> *****  <?php echo $useremail; ?> ***** </span></h3>
    <p class="text-center">If it is not immediately obvious to your visitors what your website is about,
        you are going to need to write a welcome message which makes the purpose of your website clear.
        If your website is simple, it may not be necessary to write a welcome message.  You may be able to
        display some sample previews of your content which, in combination with your menu, will make it obvious
        to your visitors what they can find on your website.
        The modern trend is towards the second option – with no formal welcome message or statement of purpose.
        However, when a site is complex, it becomes essential to explain to your users, in as few simple words as possible,
        what they can find on your site and how they can get started.

        The key to writing a good welcome message is to make it focused around your users’ wants and needs, and make it
        extremely simple.
    </p>
  </div>
</div>

</body>
</html>