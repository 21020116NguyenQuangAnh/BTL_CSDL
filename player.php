<!DOCTYPE html>
<html lang="">
    <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta  name = " viewport " content = " width = device-width, initial-scale = 1 " >
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/demo4b.css">

  <meta name="theme-color" content="#fafafa">

    </head>
    <body>
    
    <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-center">
  <!-- This is the "brand" that goes all the way to the left. -->
  <a class="navbar-brand d-flex w-50 mr-auto" href="/project/Web-test/welcome.php">FIO team</a>

  <!-- This button replaces the links list when in mobile. -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="nav">
    <!-- Create an unordered list to hold our links and format it automatically. -->
    <ul class="nav navbar-nav mr-auto justify-content-end">
      <!-- All the links in the navbar will be listed below as list items using the <li> tag. -->
      <li class="nav-item">
        <a class="nav-link" href="/project/Web-test/home.php">Home</a>
      </li>
      <li class="nav-item">
        <!-- To make them into links, we use the <a href="link"> tag. -->
        <!-- The class="nav-link" part just makes them display nicely. -->
        <a class="nav-link" href="/project/Web-test/player.php">Player</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/project/Web-test/clubs.php">Clubs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/project/Web-test/competitions.php">Competitions</a>
      </li>
    </ul>
  </div>
</nav> 

    <h1 style="margin: 10px; color: chartreuse"> Player </h1>
    <?php
        include('admincp/config/config.php');

    ?>

    </body>
</html>