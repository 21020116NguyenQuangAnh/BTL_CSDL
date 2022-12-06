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
    <style type="text/css">
        body {
            background-color: #f9f9fa;
            margin-bottom: 20px;
        }

        .padding {
            padding: 3rem !important
        }

        .user-card-full {
            overflow: hidden;
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            border: none;
            margin-bottom: 30px;
        }

        .m-r-0 {
            margin-right: 0px;
        }

        .m-l-0 {
            margin-left: 0px;
        }

        .user-card-full .user-profile {
            border-radius: 5px 0 0 5px;
        }

        .bg-c-lite-green {
            background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
            background: linear-gradient(to right, #ee5a6f, #f29263);
        }

        .user-profile {
            padding: 20px 0;
        }

        .card-block {
            padding: 1.25rem;
        }

        .m-b-25 {
            margin-bottom: 25px;
        }

        .img-radius {
            border-radius: 5px;
        }


        h6 {
            font-size: 16px;
        }

        .card .card-block p {
            line-height: 100px;
        }

        @media only screen and (min-width: 1500px) {
            p {
                font-size: 20px;
                color: crimson;
            }
        }

        .card-block {
            padding: 1.25rem;
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0;
        }

        .m-b-20 {
            margin-bottom: 20px;
        }

        .p-b-5 {
            padding-bottom: 5px !important;
        }

        .card .card-block p {
            line-height: 40px;
            width: 1800px;
        }

        .m-b-10 {
            margin-bottom: 10px;
        }

        .text-muted {
            color: black !important;
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0;
        }

        .f-w-600 {
            font-weight: 650;
        }

        .m-b-20 {
            margin-bottom: 20px;
        }

        .m-t-40 {
            margin-top: 20px;
        }

        .p-b-5 {
            padding-bottom: 5px !important;
        }

        .m-b-10 {
            margin-bottom: 10px;
        }

        .m-t-40 {
            margin-top: 20px;
        }

        .user-card-full .social-link li {
            display: inline-block;
        }

        .user-card-full .social-link li a {
            font-size: 20px;
            margin: 0 10px 0 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .section-title {
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }
        .text-primary {
            color: #ceaa4d !important;
        }
        body{margin-top:20px;}

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: 0.25rem;
        }

        section {
            padding: 120px 0;
            overflow: hidden;
            background: #fff;
        }

        .section-title {
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }
        .text-primary {
            color: #ceaa4d !important;
        }

    </style>

</head>
<div>

    <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-center fixed-top">
        <a class="navbar-brand d-flex col-sm-4 mr-auto" href="../welcome.php">FIO team</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="nav navbar-nav mr-auto justify-content-end">
                <li class="col-sm-4"></li>
                <li class="nav-item col-sm-2">
                    <a href="../home.php" class="stretched-link text-center" style="color: black">Home</a>
                </li>
                <li class="nav-item col-sm-2">
                    <a href="../player.php" class="stretched-link text-center" style="color: black">Player</a>
                </li>
                <li class="nav-item col-sm-2">
                    <a href="../clubs.php" class="stretched-link text-center" style="color: black">Clubs</a>
                </li>
                <li class="nav-item col-sm-2">
                    <a href="../competitions.php" class="stretched-link text-center"
                       style="color: black">Competitions</a>
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

    <?php
    include('../admincp/config/config.php');
    $sql_player_info = "SELECT p.*, c.pretty_name AS club, c.img_url AS logo, 
       comp.pretty_name AS league, comp.img_url AS league_img, 
       bct.flag_url AS birth_flag, cct.flag_url AS citizen_flag, YEAR(NOW()) - YEAR(p.date_of_birth) AS age
FROM players p
JOIN clubs c ON p.current_club_id = c.club_id
JOIN competitions comp ON comp.competition_id = c.domestic_competition_id
JOIN country bct ON bct.country_name = p.country_of_birth
JOIN country cct ON cct.country_name = p.country_of_citizenship
WHERE p.player_id = $_GET[id]";
    $query_player_info = mysqli_query($conn, $sql_player_info);
    $row_title = mysqli_fetch_array($query_player_info);
    ?>
    <div class="page-content page-container" id="page-content" style="margin-right: 825px; margin-top: 30px">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">

                    <div class="card user-card-full" style="width: 1100px">
                        <div class="row m-l-0 m-r-0" style="width: 900px">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <img src="<?php echo $row_title['image_url'] ?>" class="img-radius"
                                             alt="User-Profile-Image">
                                    </div>
                                    <h5 class="f-w-600">
                                        <b>
                                            <span style="font-size: 30px"><?php echo $row_title['pretty_name'] ?></span>
                                            <br>
                                            <h6 style="color: darkblue; margin-top: 5px">
                                                <b><?php echo $row_title['sub_position'] ?></b></h6>
                                        </b>
                                    </h5>
                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <div class="row" style="margin-left: 60px">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Date of birth</p>
                                            <h6 class="text-muted f-w-600"><?php echo $row_title['date_of_birth'] . ' (' . $row_title['age'] . ')' ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Height</p>
                                            <h6 class="text-muted f-w-600"><?php echo ($row_title['height_in_cm'] / 100) . ' m' ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Citizenship</p>
                                            <h6 class="text-muted f-w-600">
                                                <?php echo $row_title['country_of_citizenship'] . ' ' ?>
                                                <img src="<?php echo $row_title['citizen_flag'] ?>" alt="No image"
                                                     style="height: 20px">
                                            </h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Country of birth</p>
                                            <h6 class="text-muted f-w-600">
                                                <?php echo $row_title['country_of_birth'] . ' ' ?>
                                                <img src="<?php echo $row_title['birth_flag'] ?>" alt="No image"
                                                     style="height: 20px">
                                            </h6>
                                        </div>

                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Curent club</p>
                                            <h5 class="f-w-600">
                                                <b>
                                                    <img src="<?php echo $row_title['logo'] ?>" height="30px"
                                                         style="margin-bottom: 2px">
                                                    <a href="clubprofile.php?value=club&id=<?php echo $row_title['current_club_id'] ?>"
                                                       style="color: darkblue; font-size: 16px">
                                                        <?php echo $row_title['club'] ?>
                                                    </a>
                                                </b>
                                            </h5>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Market value</p>
                                            <h6 class="text-muted f-w-600"><?php echo '€' . number_format($row_title['market_value_in_gbp'] / 1000000, 2) . 'm' ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Dominant foot</p>
                                            <h6 class="text-muted f-w-600"><?php echo $row_title['foot'] ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Lastest season</p>
                                            <h6 class="text-muted f-w-600"><?php echo $row_title['last_season'] ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h5 class="section-title text-primary mb-3 mb-sm-4" style="margin-left: 205px">Club career</h5>
    <?php
    $sql_career = "SELECT games.season AS season, players.pretty_name AS player_name, 
       clubs.img_url as Logo, clubs.club_id, clubs.pretty_name AS club_name
FROM `appearances` 
inner join players on players.player_id = appearances.player_id
inner join games on games.game_id = appearances.game_id
inner join clubs on clubs.club_id = appearances.player_club_id
where players.player_id = $_GET[id]
GROUP BY players.pretty_name, clubs.pretty_name, games.season
ORDER BY games.date;";
    $query_career = mysqli_query($conn, $sql_career);
    ?>
    <div class="container"
    <h4>
        <div class="widget-next-match">
            <table class="table custom-table">
                <thead>
                <tr style="background-color: red; text-align: justify" class="text-white">
                    <th>Season</th>
                    <th>Club Name</th>
                </tr>
                </thead>
                <tbody style="background-color: white">
                <?php
                while ($row = $query_career->fetch_array()) {
                    ?>
                    <tr>
                        <td><?php echo $row['season'] ?> </td>
                        <td><img src="<?php echo $row["Logo"] ?>" style="background-color: white" align="middle"
                                 height="25"
                                 alt="Card image">
                            &nbsp;&nbsp;<a
                                    href="clubprofile.php?value=club&id=<?php echo $row["club_id"] ?>"><strong
                                        class="text-black"><?php echo $row['club_name'] ?></strong></a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </h4>
</div>
</body>
</html>