<!DOCTYPE html>
<html lang="">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=" viewport " content=" width = device-width, initial-scale = 1 ">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
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

<nav class="navbar navbar-expand-md navbar-light bg-light justify-content-center fixed-top">
    <a class="navbar-brand d-flex col-sm-4 mr-auto" href="welcome.php">FIO team</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
        <ul class="nav navbar-nav mr-auto justify-content-end">
            <li class="col-sm-4"></li>
            <li class="nav-item col-sm-2">
                <a href="home.php" class="stretched-link text-center" style="color: black">Home</a>
            </li>
            <li class="nav-item col-sm-2">
                <a href="player.php" class="stretched-link text-center" style="color: black">Player</a>
            </li>
            <li class="nav-item col-sm-2">
                <a href="clubs.php" class="stretched-link text-center" style="color: black">Clubs</a>
            </li>
            <li class="nav-item col-sm-2">
                <a href="competitions.php" class="stretched-link text-center" style="color: black">Competitions</a>
            </li>
        </ul>
    </div>
    <form action="" id="search-box">
            <input type="text" id="search-text"> 
            <button id="search-btn">
           <i class="fa-solid fa-magnifying-glass"></i>
            </button>
    </form>

</nav>

<div class="container-fluid" style="margin-top:80px">
    <h1 style="color: darkblue"> Clubs </h1>
</div>

<?php
include('admincp/config/config.php');
$sql_club = 'SELECT * FROM `clubs` order by `total_market_value` desc limit 9;';
$query_club = mysqli_query($conn, $sql_club);
?>

<div class="container-fluid">
    <h2>Most valuable clubs</h2>
    <div class="card-group">
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_club)) {
            $i++;
            ?>
            <div class="card" style>
                <img class="card-img-top" src="<?php echo $row['img_url'] ?>" alt="Card image">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $row['pretty_name'] ?></h6>
                    <a href="profile/clubprofile.php?value=club&id=<?php echo$row['club_id'] ?>" class="btn btn-primary stretched-link">See Profile</a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

</body>
</html>