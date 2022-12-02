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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
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
    <h1 style="color: darkred"> Competitions </h1>
</div>
<?php
include('admincp/config/config.php');
$test = 'SELECT DISTINCT `competition_code` FROM `games`;';
$test_list = mysqli_query($conn, $test);
?>

<form action="" method="post">
    <a class="col-sm-2 text-left"> Competition: </a>
    <select name="competitions" text="<?php $competitions ?>">
        <?php
        while ($row = mysqli_fetch_array($test_list)) {
            printf("%s \n", $row["competition_code"]);
            ?>
            <option value="<?php echo $row["competition_code"] ?>"> <?php echo $row["competition_code"] ?> </option>
            <?php
        }
        ?>
    </select>
    <br>
    <a class="col-sm-2 text-left"> Years: </a>
    <input type="text" name="year" value="">
    <button type="submit" class="text-left">Gửi</button>
</form>

<?php
if (isset($_POST["competitions"])) {
    $competitions = $_POST["competitions"];
} else {
    $competitions = 'GB1';
}
if (isset($_POST["year"])) {
    $year = $_POST["year"];
} else {
    $year = 2021;
}
//$competitions= $_POST["competitions"];
//$year= $_POST["year"];
?>
<form action="" method="post">
    <a class="col-sm-2 text-left"> Competition: </a>
    <input class="col-sm-2" type="text" name="competitions" value="">
    <br>
    <a class="col-sm-2 text-left"> Years: </a>
    <input class="col-sm-2" type="text" name="year" value="">
    <button type="submit" class="text-left">Gửi</button>
</form>
<?php
if (isset($_POST["competitions"])) {
    $competitions = $_POST["competitions"];
} else {
    $competitions = 'GB1';
}
if (isset($_POST["year"])) {
    $year = $_POST["year"];
} else {
    $year = 2021;
}
//$competitions= $_POST["competitions"];
//$year= $_POST["year"];
include('admincp/config/config.php');

$sql_bxh = 'select row_number() over (order by points desc, HS desc, BT desc) as STT,
        home.club_id,
        home.img_url as Logo,
        home.pretty_name as Clubs,
        home.home_played + away.away_played as PL,
        home.home_points + away.away_points as points,
        home.home_wins + away.away_wins as W,
        home.home_draws + away.away_draws as D,
        home.home_loses + away.away_loses as L,
        home.home_goals + away.away_goals as BT,
        home.home_conceded_goals + away.away_conceded_goals as BB,
        home.home_goals + away.away_goals - (home.home_conceded_goals + away.away_conceded_goals) as HS
        from (select c1.pretty_name, c1.club_id, c1.img_url,
        sum(if(games.home_club_id is not null,1,0)) home_played,
        sum(if(games.home_club_goals > games.away_club_goals,3,if(games.home_club_goals = games.away_club_goals,1,0))) home_points,
        sum(if(games.home_club_goals > games.away_club_goals,1,0)) home_wins,
        sum(if(games.home_club_goals = games.away_club_goals,1,0)) home_draws,
        sum(if(games.home_club_goals < games.away_club_goals,1,0)) home_loses,
        sum(games.home_club_goals) home_goals,
        sum(games.away_club_goals) home_conceded_goals
        from games inner join clubs c1 on c1.club_id = games.home_club_id 
        where games.competition_code = ? and games.season = ? group by c1.club_id) home 
        join (select c2.pretty_name, c2.club_id, c2.img_url,
        sum(if(games.away_club_id is not null,1,0)) away_played,
        sum(if(games.home_club_goals < games.away_club_goals,3,if(games.home_club_goals = games.away_club_goals,1,0))) away_points,
        sum(if(games.home_club_goals < games.away_club_goals,1,0)) away_wins,
        sum(if(games.home_club_goals = games.away_club_goals,1,0)) away_draws,
        sum(if(games.home_club_goals > games.away_club_goals,1,0)) away_loses,
        sum(games.home_club_goals) away_conceded_goals,
        sum(games.away_club_goals) away_goals
        from games inner join clubs c2 on c2.club_id = games.away_club_id 
        where games.competition_code = ? and games.season = ? group by c2.club_id) away 
        on home.club_id = away.club_id order by points DESC, HS desc, BT DESC;';
$query_bxh = $conn->prepare($sql_bxh);
$query_bxh->bind_param("ssss", $competitions, $year, $competitions, $year);
$query_bxh->execute();
$query_ltb = $query_bxh->get_result();
//$query_bxh = mysqli_query($conn, $sql_bxh);
?>

<div class="container">
    <h2>Premier League Table <br>
        <?php echo $competitions ?> Season <?php echo $year ?>
    </h2>
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
        while ($row = $query_ltb->fetch_array()) {
            $i++;
            ?>
            <tr>
                <td><?php echo $i ?> </td>
                <td><img src="<?php echo $row['Logo'] ?>" , align="middle", height="25" , alt="Card image">
                    &nbsp;&nbsp;<a href="profile/clubprofile.php?value=club&id=<?php echo $row['club_id'] ?>">
                        <?php echo $row['Clubs'] ?></td>
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
</div>
</body>
</html>