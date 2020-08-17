<?php 
  session_start();
  // database file connected with dashboard
  include("config/database.php");
  //echo $_SESSION['adminname'];
  if(empty($_SESSION['adminname']))
  {
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html class="no-js">
   <head>
      <meta charset="utf-8">
      <title>Travelo</title>
      <meta name="description" content="">
      <!-- Mobile Specific Meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="img/travelo-admin.png">
      <!-- Bootstrap 4 link -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/mystyle.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <!-- End Bootstrap 4 link -->
      <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
      <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
      <!-- Syntax Highlighter -->
      <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
      <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">
      <!-- Font Awesome CSS-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!-- Normalize/Reset CSS-->
      <link rel="stylesheet" href="css/normalize.min.css">
      <!-- Main CSS-->
      <link rel="stylesheet" href="css/main.css">
   </head>
   <body id="welcome">