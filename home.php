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

<div class="container-fluid" style="margin-top:80px">
    <h1 style="color: red"> Home </h1>
</div>

<?php
include('admincp/config/config.php');

$sql_bxh = 'select row_number() over (order by points desc, HS desc, BT desc) as STT,
        home.pretty_name as Clubs,
        home.home_played + away.away_played as PL,
        home.home_points + away.away_points as points,
        home.home_wins + away.away_wins as W,
        home.home_draws + away.away_draws as D,
        home.home_loses + away.away_loses as L,
        home.home_goals + away.away_goals as BT,
        home.home_conceded_goals + away.away_conceded_goals as BB,
        home.home_goals + away.away_goals - (home.home_conceded_goals + away.away_conceded_goals) as HS
        from (select c1.pretty_name, c1.club_id,
        sum(if(games.home_club_id is not null,1,0)) home_played,
        sum(if(games.home_club_goals > games.away_club_goals,3,if(games.home_club_goals = games.away_club_goals,1,0))) home_points,
        sum(if(games.home_club_goals > games.away_club_goals,1,0)) home_wins,
        sum(if(games.home_club_goals = games.away_club_goals,1,0)) home_draws,
        sum(if(games.home_club_goals < games.away_club_goals,1,0)) home_loses,
        sum(games.home_club_goals) home_goals,
        sum(games.away_club_goals) home_conceded_goals
        from games inner join clubs c1 on c1.club_id = games.home_club_id 
        where games.competition_code = \'GB1\' and games.season = 2021 group by c1.club_id) home 
        join (select c2.pretty_name, c2.club_id,
        sum(if(games.away_club_id is not null,1,0)) away_played,
        sum(if(games.home_club_goals < games.away_club_goals,3,if(games.home_club_goals = games.away_club_goals,1,0))) away_points,
        sum(if(games.home_club_goals < games.away_club_goals,1,0)) away_wins,
        sum(if(games.home_club_goals = games.away_club_goals,1,0)) away_draws,
        sum(if(games.home_club_goals > games.away_club_goals,1,0)) away_loses,
        sum(games.home_club_goals) away_conceded_goals,
        sum(games.away_club_goals) away_goals
        from games inner join clubs c2 on c2.club_id = games.away_club_id 
        where games.competition_code = \'GB1\' and games.season = 2021 group by c2.club_id) away 
        on home.club_id = away.club_id order by points DESC, HS desc, BT DESC;';
$query_bxh = mysqli_query($conn, $sql_bxh);
?>

<div class="container">
    <h2>Premier League Table</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Clubs</th>
            <th>PL</th>
            <th>P</th>
            <th>W</th>
            <th>D</th>
            <th>L</th>
            <th>BT</th>
            <th>BB</th>
            <th>HS</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_bxh)) {
            $i++;
            ?>
            <tr>
                <td><?php echo $i ?> </td>
                <td><?php echo $row['Clubs'] ?> </td>
                <td><?php echo $row['PL'] ?> </td>
                <td><?php echo $row['points'] ?> </td>
                <td><?php echo $row['W'] ?> </td>
                <td><?php echo $row['D'] ?> </td>
                <td><?php echo $row['L'] ?> </td>
                <td><?php echo $row['BT'] ?> </td>
                <td><?php echo $row['BB'] ?> </td>
                <td><?php echo $row['HS'] ?> </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<?php
include('admincp/config/config.php');
$sql_player = 'select * from players order by market_value_in_gbp desc limit 9';
$query_player = mysqli_query($conn, $sql_player);
?>

<div class="container">
    <h2>Most valuable players</h2>
    <div class="card-group">
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_player)) {
            $i++;
            ?>
            <div class="card" style>
                <img class="card-img-top" src="<?php echo$row['image_url']?>" alt="Card image">
                <div class="card-body">
                    <h6 class="card-title"><?php echo$row['pretty_name']?></h6>
                    <a href="/project/Web-test/player.php" class="btn btn-primary stretched-link">See Profile</a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

</body>
</html>