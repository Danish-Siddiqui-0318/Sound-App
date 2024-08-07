<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Sound - The App For Music And Video</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="playmusic.css">
    <link rel="stylesheet" href="css/plyr.css" />
</head>

<body style="background-color: black;color: white;">

    <!-- Navbar HERE-->
    <?php require_once ('components/navbar.php') ?>
    <!-- Navbar HERE-->
    <?php

    require_once ('admin/db.php');
    $id = $_GET['id'];
    $query = "SELECT music.*,artist.artist_name, artist.artist_image, album.album_name, album.album_photo, album.releaseyear,musicgenre.music_genre_name FROM music INNER JOIN artist ON music.music_artist= artist.artist_id INNER JOIN album ON music.music_album = album.id INNER JOIN musicgenre ON music.music_genre = musicgenre.id WHERE music.`id`=" . $id;
    $result = mysqli_query($connection, $query);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
    }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mt-4">
                <img src="admin/<?php echo $row['music_thumbnail'] ?>" class="img-thumbnail" style="height: 80vh;">
            </div>
            <div class="col-md-6" style="display: flex;justify-content: center;align-items: center;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center text-capitalize"><?php echo $row['music_title'] ?></h1>
                    </div>
                    <div class="col-md-12">
                        <h3 class="text-center text-capitalize">Singer : <?php echo $row['artist_name'] ?></h3>
                    </div>
                    <div class="col-md-12">
                        <h3 class="text-center text-capitalize">Album : <?php echo $row['album_name'] ?><br>Release Year
                            : <?php echo $row['releaseyear'] ?></h3>
                    </div>
                    <div class="col-md-12">
                        <h3 class="text-center text-capitalize">Rating :
                            <?php
                            require_once ('admin/db.php');
                            $ratingquery = "SELECT * FROM music_rating WHERE music_id =" . $id;
                            $ratingresult = mysqli_query($connection, $ratingquery);
                            if ($ratingresult->num_rows > 0) {
                                $averating = 0;
                                $count = 0;
                                while ($ratingrow = mysqli_fetch_assoc($ratingresult)) {
                                    $averating += $ratingrow['rating'];
                                    $count = $count + 1;
                                }
                                $totalRating = $averating / $count;
                                echo (int)$totalRating ;
                            }
                            ?>
                        </h3>
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="music_review.php?id=<?php echo $row['id'] ?>"><button type="button"
                                class="btn btn-outline-success">Give Review</button></a>
                        <a href="music_rating.php?id=<?php echo $row['id'] ?>"><button type="button"
                                class="btn btn-outline-info">Give Rating</button></a>
                    </div>
                </div>
            </div>
            <style>
                .plyr--audio .plyr__controls {
                    background: black;
                }

                .plyr__controls .plyr__controls__item {
                    color: white;
                }
            </style>
            <!-- $ratingrow = mysqli_fetch_assoc($ratingresult);
                            print_r($ratingrow) ;
                            die; -->
            <div class="col-md-12 my-4">
                <audio id="player" controls style="--plyr-color-main: #1ac266; ">
                    <source src="admin/<?php echo $row['music_loc'] ?>" type="audio/mp3" />
                </audio>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-capitalize">Reviews</h2>
            </div>
            <div class="col-md-12">
                <div class="card" style="width: 100%;color:black;">
                    <div class="card-header">
                        Reviews
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
                        require_once ('admin/db.php');
                        $reviewQuery = "SELECT * FROM music_review WHERE music_id=$id ORDER BY music_review.`id` DESC LIMIT 3";
                        $reviewresult = mysqli_query($connection, $reviewQuery);
                        if ($reviewresult->num_rows > 0) {
                            while ($reviewrow = mysqli_fetch_assoc($reviewresult)) {
                                ?>
                                <li class="list-group-item"><?php echo $reviewrow['review'] ?></li>
                                <?php
                            }
                        } else {
                            ?>
                            <li class="list-group-item">No Reviews Yet</li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- footer  section start -->
    <?php require_once ('components/footer.php') ?>
    <!-- footer  section end -->
    <script src=" js/jquery.min.js">
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    <script src="js/plyr.js"></script>
    <script>
        const player = new Plyr('#player');

        player.stop();
    </script>
</body>

</html>