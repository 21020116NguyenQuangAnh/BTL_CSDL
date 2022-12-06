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
    <link rel="stylesheet" href="../css/player_profile.css">

    <meta name="theme-color" content="#fafafa">

    <style type="text/css">
        body {
            margin-top: 20px;
        }

        .card-style1 {
            box-shadow: 0px 0px 10px 0px rgb(89 75 128 / 9%);
        }

        .border-0 {
            border: 0 !important;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }

        section {
            padding: 120px 0;
            overflow: hidden;
            background: #fff;
        }

        .mb-2-3, .my-2-3 {
            margin-bottom: 2.3rem;
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

        .text-secondary {
            color: #15395A !important;
        }

        .font-weight-600 {
            font-weight: 600;
        }

        .display-26 {
            font-size: 1.3rem;
        }

        @media screen and (min-width: 992px) {
            .p-lg-7 {
                padding: 4rem;
            }
        }

        @media screen and (min-width: 768px) {
            .p-md-6 {
                padding: 3.5rem;
            }
        }

        @media screen and (min-width: 576px) {
            .p-sm-2-3 {
                padding: 2.3rem;
            }
        }

        .p-1-9 {
            padding: 1.9rem;
        }

        .bg-secondary {
            background: #15395A !important;
        }

        @media screen and (min-width: 576px) {
            .pe-sm-6, .px-sm-6 {
                padding-right: 3.5rem;
            }
        }

        @media screen and (min-width: 576px) {
            .ps-sm-6, .px-sm-6 {
                padding-left: 3.5rem;
            }
        }

        .pe-1-9, .px-1-9 {
            padding-right: 1.9rem;
        }

        .ps-1-9, .px-1-9 {
            padding-left: 1.9rem;
        }

        .pb-1-9, .py-1-9 {
            padding-bottom: 1.9rem;
        }

        .pt-1-9, .py-1-9 {
            padding-top: 1.9rem;
        }

        .mb-1-9, .my-1-9 {
            margin-bottom: 1.9rem;
        }

        @media (min-width: 992px) {
            .d-lg-inline-block {
                display: inline-block !important;
            }
        }

        .rounded {
            border-radius: 0.25rem !important;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: .875rem;
            font-weight: 400;
            line-height: 1.4285714286;
            color: #212529;
            text-align: left;
            background-color: #f9f9fa
        }


        #page-content {

            margin-top: 100px;
        }


        a {
            color: #448bff;
            text-decoration: none;
            background-color: transparent
        }

        a:hover {
            color: #005ef7;
            text-decoration: underline
        }

        a:not([href]):not([tabindex]) {
            color: inherit;
            text-decoration: none
        }

        a:not([href]):not([tabindex]):focus,
        a:not([href]):not([tabindex]):hover {
            color: inherit;
            text-decoration: none
        }

        a:not([href]):not([tabindex]):focus {
            outline: 0
        }

        @media (min-width: 576px) {
            .col-sm-2 {
                flex: 0 0 16.6666666667%;
                max-width: 16.6666666667%
            }

            .col-sm-4 {
                flex: 0 0 33.3333333333%;
                max-width: 33.3333333333%
            }

            .col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%
            }
        }


        .text-muted {
            color: #99a0ac !important
        }

        .block,
        .card {
            background: #fff;
            border-width: 0;
            border-radius: .25rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
            margin-bottom: 1.5rem
        }

        .avatar {
            position: relative;
            line-height: 1;
            border-radius: 500px;
            white-space: nowrap;
            font-weight: 700;
            border-radius: 100%;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            border-radius: 500px;
            box-shadow: 0 5px 10px 0 rgba(50, 50, 50, .15)
        }

        .avatar img {
            border-radius: inherit;
            width: 100%
        }

        .gd-primary {
            color: #fff;
            border: none;
            background: #448bff linear-gradient(45deg, #448bff, #44e9ff)
        }

        @media (min-width: 992px) {
            .page-container {
                max-width: 1140px;
                margin: 0 auto
            }
        }


        .list {
            padding-left: 0;
            padding-right: 0
        }

        .list-item {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word
        }


        .list-row .list-item {
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-align: center;
            align-items: center;
            padding: .75rem .625rem
        }

        .list-row .list-item > * {
            padding-left: .625rem;
            padding-right: .625rem
        }

        .text-color {
            color: #5e676f
        }

        .text-sm {
            font-size: .825rem
        }

        .h-1x {
            height: 1.25rem;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical
        }


        .w-48 {
            width: 48px !important;
            height: 48px !important
        }


        a:link {

            text-decoration: none;
        }
    </style>

</head>
<body>

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
                <a href="../competitions.php" class="stretched-link text-center" style="color: black">Competitions</a>

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
$sql_club_info = "select clubs.*, comp.pretty_name as league_name, comp.country_name, comp.img_url as league_url , s.stadium_seats, country.flag_url
from clubs join competitions as comp on clubs.`domestic_competition_id` = comp.competition_id
join stadiums as s on clubs.stadium_name = s.stadium_name
join country on comp.country_name = country.country_name
where club_id = $_GET[id]";
$query_club_info = mysqli_query($conn, $sql_club_info);
$row_title = mysqli_fetch_array($query_club_info);
?>

<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="<?php echo $row_title['img_url'] ?>" style="width: 300px; margin-left: 80px"
                                     alt="Card image">
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0" style="min-width: 280px"><?php echo $row_title['pretty_name'] ?></h3>
                                    <span class="text-primary">
                                        <b><?php echo $row_title['country_name'] ?></b>
                                        <img src="<?php echo $row_title['flag_url'] ?>"
                                             style="height: 18px; background-color: white; margin-bottom: 5px">
                                    </span>
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28">
                                        <span class="display-26 text-secondary me-2 font-weight-600">
                                            League:
                                        </span>
                                        <b style="font-size: 25px">
                                            <?php echo $row_title['league_name'] ?>
                                            <img src="<?php echo $row_title['league_url'] ?>"
                                                 style="height: 45px">
                                        </b>
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                                class="display-26 text-secondary me-2 font-weight-600">Total market value: </span><b> <?php echo '€' . $row_title['total_market_value'] . 'm' ?> </b>
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                                class="display-26 text-secondary me-2 font-weight-600">Coach: </span><b style="font-size: 18px"> <?php echo $row_title['coach_name'] ?> </b>
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                                class="display-26 text-secondary me-2 font-weight-600">Squad size: </span><b> <?php echo $row_title['squad_size'] ?> </b>
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                                class="display-26 text-secondary me-2 font-weight-600">Average age: </span><b> <?php echo $row_title['average_age'] ?> </b>
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                                class="display-26 text-secondary me-2 font-weight-600">Foreigners: </span><b> <?php echo $row_title['foreigners_number'] ?> </b>&nbsp;<span
                                                style="font-size: 12px"><?php echo $row_title['foreigners_percentage'] . '%' ?></span>
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                                class="display-26 text-secondary me-2 font-weight-600">National team players: </span><b> <?php echo $row_title['national_team_players'] ?> </b>
                                    </li>
                                    <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Stadium: </span><b> <?php echo $row_title['stadium_name'] ?> </b>&nbsp;<span
                                                style="font-size: 12px"><?php echo $row_title['stadium_seats'] . ' seats' ?></span>
                                    </li>
                                </ul>
                                <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                    <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 mb-4 mb-sm-5">
                        <div class="mb-4 mb-sm-5">
                            <span class="section-title text-primary mb-3 mb-sm-4">Percentage</span>
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6">National team players</div>
                                    <div class="col-6 text-end"><?php echo (number_format($row_title['foreigners_number'] / $row_title['squad_size'] * 100, 1)) . '%' ?></div>
                                </div>
                            </div>
                            <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                <div class="animated custom-bar progress-bar slideInLeft bg-secondary"
                                     style="width:<?php echo($row_title['foreigners_number'] / $row_title['squad_size'] * 100) ?>%"
                                     aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                            </div>
                            <div class="progress-text">
                                <div class="row">
                                    <div class="col-6">Foreigners</div>
                                    <div class="col-6 text-end"><?php echo (number_format($row_title['national_team_players'] / $row_title['squad_size'] * 100, 1)) . '%' ?></div>
                                </div>
                            </div>
                            <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                <div class="animated custom-bar progress-bar slideInLeft bg-secondary"
                                     style="width:<?php echo(number_format($row_title['national_team_players'] / $row_title['squad_size'] * 100, 1)) ?>%"
                                     aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $sql_player_list = "select * from players 
         WHERE current_club_id = $_GET[id] and last_season = 2021 
         ORDER BY sub_position";
            $query_player_list = mysqli_query($conn, $sql_player_list);
            ?>
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div>
                    <span class="section-title text-primary mb-3 mb-sm-4">SQUAD OF <?php echo $row_title['pretty_name'] ?></span>

                    <?php
                    while ($row = mysqli_fetch_array($query_player_list)) {
                        ?>
                        <div class="page-content page-container" id="page-content" style="margin-top: 0px">
                            <div class="padding">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="list list-row block" style="width: 800px">
                                            <div class="list-item" data-id="7">
                                                <div>
                                                    <a href="playerprofile.php?value=player&id=<?php echo $row['player_id'] ?>"
                                                       data-abc="true"><span
                                                                class="w-48 avatar gd-primary"><img
                                                                    src="<?php echo $row['image_url'] ?>"
                                                                    alt="Player image"></span></a></div>
                                                <div class="flex">
                                                    <a href="playerprofile.php?value=player&id=<?php echo $row['player_id'] ?>"
                                                       class="item-author text-color"
                                                       data-abc="true"><b><?php echo $row['pretty_name'] ?></b></a>
                                                    <div class="item-except text-muted text-sm h-1x"><?php echo $row['sub_position'] ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
