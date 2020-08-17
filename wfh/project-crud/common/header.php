<?php
// Start the session
//session_start();
?>
<html>
   <head>
      <title>Project Crud Operation</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <a class="navbar-brand pl-4" href="index.php">
            <img src="images/bird.jpg" alt="logo" style="width:40px;">
          </a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand text-white" href="index.php">Home</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link text-white" href="add-data.php">Add Employee</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="show-data.php">Show Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white disabled" href="">Disabled</a>
              </li>
              <?php if(isset($_SESSION['email']))
               {
                ?>
                    <li class="nav-item">
                        <span class="btn btn-danger text-white"> <?php echo $_SESSION['email'];?> </span>
                    </li>
                <?php
                }
               ?>
               <li class="nav-item pl-4">
                <a class="nav-link btn btn-sm btn-primary text-white" href="logout.php">
                <i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;Logout</i></a>
               </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
    </div>
