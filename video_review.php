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
    <?php require_once ('components/navbar.php');
    $id = $_GET['id'];
    ?>
    <!-- Navbar HERE-->


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="videoreviewprocess.php" method="POST">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com" name="video_id" value="<?php echo $id ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Give Your Review on this
                            Video</label>
                        <textarea class="form-control" name="videoreview" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-outline-success"></input>
                </form>
            </div>
        </div>
        <div class="row">
            <div style="position: absolute;bottom:0;" class="col-md-12">
                <!-- footer  section start -->
                <?php require_once ('components/footer.php') ?>
            </div>
        </div>
    </div>

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