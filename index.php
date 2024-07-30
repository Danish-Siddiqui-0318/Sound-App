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

</head>

<body>
   <!-- header section start -->
   <?php include_once ('components/navbar.php') ?>
   <!-- header section end -->
   <!-- banner section end -->
   <?php
   require_once ('admin/db.php');
   $query = "SELECT video.*, video_artist.artist_name, videogenre.`video_genre_name`
   FROM video
   INNER JOIN video_artist ON video.video_artist = video_artist.id
   INNER JOIN videogenre ON videogenre.id = video.video_genre  LIMIT 1";
   $result = mysqli_query($connection, $query);
   $Carouselrow = mysqli_fetch_assoc($result);
   ?>
   <div class="banner_section layout_padding"
      style="background-image: url(admin/<?php echo $Carouselrow['video_thumbnail'] ?>);background-repeat: no-repeat;background-size: cover;">
      <div class="container">
         <div class="row">
            <div class="col-md-6" style="background: rgba(255, 255, 255, 0.22);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(1.6px);
-webkit-backdrop-filter: blur(1.6px);
border: 1px solid rgba(255, 255, 255, 0.49);">
               <div class="banner_taital">Enjoy <br><?php echo $Carouselrow['video_title'] ?> With <br>
                  <?php echo $Carouselrow['artist_name'] ?></div>
               <p class="banner_text"><?php echo $Carouselrow['video_description'] ?> </p>
               <div class="see_bt"><a href="#" class="carouselbtn" style="background-color: #138808 ;" * />See More</a>
               </div>
            </div>
            <div class="col-md-6">
               <div class="play_icon"><a href="admin/<?php $Carouselrow['video_loc'] ?>"><img
                        src="images/play-icon.png"></a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- banner section end -->
   <!-- arrival section start -->
   <div class="arrival_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-lg-4">
               <div class="image_1">
                  <h2 class="jesusroch_text">J E S U S R O C H</h2>
                  <p class="movie_text">Hollywood Movie</p>
               </div>
            </div>
            <div class="col-sm-6 col-lg-4">
               <div class="image_2">
                  <h2 class="jesusroch_text">J E S U S R O C H</h2>
                  <p class="movie_text">Hollywood Movie</p>
               </div>
            </div>
            <div class="col-sm-8 col-lg-4">
               <h1 class="arrival_text">A r r i v a l</h1>
               <div class="movie_main">
                  <div class="mins_text_1">150 mins</div>
                  <div class="mins_text">Actions Movie</div>
                  <div class="mins_text"><img src="images/icon-1.png"><span class="icon_1">Watchlist</span></div>
               </div>
               <p class="long_text">It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking at its layout. The point of using Lorem</p>
               <div class="rating_main">
                  <div class="row">
                     <div class="col-sm-6 col-lg-6">
                        <div class="icon_2"><img src="images/icon-2.png"><span class="padding_10">4.6 Revieweed</span>
                        </div>
                     </div>
                     <div class="col-sm-6 col-lg-6">
                        <div class="icon_2"><img src="images/icon-2.png"><span class="padding_10">Your Rateing</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="paly_bt"><a href="#">Play Now</a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- arrival section end -->
   <!-- movies section start -->
   <div class="movies_section layout_padding" style="background-color: black;">
      <div class="container">
         <div class="movies_menu">
            <ul>
               <li class="active"><a href="#">Overview</a></li>
               <li><a href="tv.html">TV</a></li>
               <li><a href="movies.html">Movies</a></li>
               <li><a href="#">Show</a></li>
               <li><a href="celebs.html">Celeb</a></li>
               <li><a href="#">Sports</a></li>
               <li><a href="#">News</a></li>
               <li><a href="#">Cartoon</a></li>
            </ul>
         </div>
         <div class="movies_section_2 layout_padding">
            <h2 class="letest_text">Latest Music<span class="badge rounded-pill  mx-2 text-bg-primary"
                  style="background-color:#138808 ;color:white;border-radius: 40%;">New</span>
            </h2>
            <div class="seemore_bt"><a href="#">See More</a></div>
            <div class="movies_main">
               <div class="iamge_movies_main">
                  <?php
                  require_once ('admin/db.php');
                  $musicQuery = "SELECT music.*,artist.artist_name, artist.artist_image, album.album_name, album.album_photo, album.releaseyear,musicgenre.music_genre_name FROM music INNER JOIN artist ON music.music_artist= artist.artist_id INNER JOIN album ON music.music_album = album.id INNER JOIN musicgenre ON music.music_genre = musicgenre.id ORDER BY music.`id` DESC
                  LIMIT 4 ";
                  $musicResult = mysqli_query($connection, $musicQuery);
                  if ($musicResult->num_rows > 0) {
                     while ($musicrow = mysqli_fetch_assoc($musicResult)) {
                        ?>
                        <div class="iamge_movies">
                           <div class="image_3">
                              <img src="admin/<?php echo $musicrow['music_thumbnail'] ?>" class="image img-fluid"
                                 style="width:100%">
                              <div class="middle">
                                 <div class="playnow_bt"><a href="" style="cursor: pointer;">Play Now</a></div>
                              </div>
                           </div>
                           <h1 class="code_text"><?php echo $musicrow['music_title'] ?></h1>
                           <p class="there_text">Artist Name : <?php echo $musicrow['artist_name'] ?> </p>
                           <p class="there_text">Music Genre : <?php echo $musicrow['music_genre_name'] ?> </p>
                           <div class="star_icon">
                              <ul>
                                 <li><a href="#"><img src="images/star-icon.png"></a></li>
                                 <li><a href="#"><img src="images/star-icon.png"></a></li>
                                 <li><a href="#"><img src="images/star-icon.png"></a></li>
                                 <li><a href="#"><img src="images/star-icon.png"></a></li>
                                 <li><a href="#"><img src="images/star-icon.png"></a></li>
                              </ul>
                           </div>
                        </div>
                        <?php
                     }
                  }
                  ?>
               </div>
            </div>
         </div>
         <div class="movies_section_2 layout_padding">
            <h2 class="letest_text">Latest Video<span class="badge rounded-pill  mx-2 text-bg-primary"
                  style="background-color:#138808 ;color:white;border-radius: 40%;">New</span></h2>
            <div class="seemore_bt"><a href="#">See More</a></div>
            <div class="movies_main">
               <div class="iamge_movies_main">
                  <div class="iamge_movies">
                     <div class="image_3">
                        <img src="images/img-8.png" class="image" style="width:100%">
                        <div class="middle">
                           <div class="playnow_bt">Play Now</div>
                        </div>
                     </div>
                     <h1 class="code_text">CADE Prlor</h1>
                     <p class="there_text">There are many variations </p>
                     <div class="star_icon">
                        <ul>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="iamge_movies">
                     <div class="image_3">
                        <img src="images/img-9.png" class="image" style="width:100%">
                        <div class="middle">
                           <div class="playnow_bt">Play Now</div>
                        </div>
                     </div>
                     <h1 class="code_text">Bradon</h1>
                     <p class="there_text">There are many variations </p>
                     <div class="star_icon">
                        <ul>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="iamge_movies">
                     <div class="image_3">
                        <img src="images/img-10.png" class="image" style="width:100%">
                        <div class="middle">
                           <div class="playnow_bt">Play Now</div>
                        </div>
                     </div>
                     <h1 class="code_text">Anton Levin</h1>
                     <p class="there_text">There are many variations </p>
                     <div class="star_icon">
                        <ul>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="iamge_movies">
                     <div class="image_3">
                        <img src="images/img-11.png" class="image" style="width:100%">
                        <div class="middle">
                           <div class="playnow_bt">Play Now</div>
                        </div>
                     </div>
                     <h1 class="code_text">Sacha Styles</h1>
                     <p class="there_text">There are many variations </p>
                     <div class="star_icon">
                        <ul>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="iamge_movies">
                     <div class="image_3">
                        <img src="images/img-12.png" class="image" style="width:100%">
                        <div class="middle">
                           <div class="playnow_bt">Play Now</div>
                        </div>
                     </div>
                     <h1 class="code_text">Katledrazdu</h1>
                     <p class="there_text">There are many variations </p>
                     <div class="star_icon">
                        <ul>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="movies_section_2 layout_padding">
            <h2 class="letest_text">Sports</h2>
            <div class="seemore_bt"><a href="#">See More</a></div>
            <div class="movies_main">
               <div class="iamge_movies_main">
                  <div class="iamge_movies">
                     <div class="image_3">
                        <img src="images/img-13.png" class="image" style="width:100%">
                        <div class="middle">
                           <div class="playnow_bt">Play Now</div>
                        </div>
                     </div>
                     <h1 class="code_text">CADE Prlor</h1>
                     <p class="there_text">There are many variations </p>
                     <div class="star_icon">
                        <ul>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="iamge_movies">
                     <div class="image_3">
                        <img src="images/img-14.png" class="image" style="width:100%">
                        <div class="middle">
                           <div class="playnow_bt">Play Now</div>
                        </div>
                     </div>
                     <h1 class="code_text">Bradon</h1>
                     <p class="there_text">There are many variations </p>
                     <div class="star_icon">
                        <ul>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="iamge_movies">
                     <div class="image_3">
                        <img src="images/img-15.png" class="image" style="width:100%">
                        <div class="middle">
                           <div class="playnow_bt">Play Now</div>
                        </div>
                     </div>
                     <h1 class="code_text">Anton Levin</h1>
                     <p class="there_text">There are many variations </p>
                     <div class="star_icon">
                        <ul>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="iamge_movies">
                     <div class="image_3">
                        <img src="images/img-16.png" class="image" style="width:100%">
                        <div class="middle">
                           <div class="playnow_bt">Play Now</div>
                        </div>
                     </div>
                     <h1 class="code_text">Sacha Styles</h1>
                     <p class="there_text">There are many variations </p>
                     <div class="star_icon">
                        <ul>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="iamge_movies">
                     <div class="image_3">
                        <img src="images/img-7.png" class="image" style="width:100%">
                        <div class="middle">
                           <div class="playnow_bt">Play Now</div>
                        </div>
                     </div>
                     <h1 class="code_text">Katledrazdu</h1>
                     <p class="there_text">There are many variations </p>
                     <div class="star_icon">
                        <ul>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                           <li><a href="#"><img src="images/star-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <div class="seebt_1"><a href="#">See More</a></div>
      </div>
   </div>
   <!-- movies section end -->
   <!-- newsletter section start -->
   <div class="newsletter_section layout_padding">
      <div class="container">
         <h1 class="newsletter_text">Subscribe Our Newsletter</h1>
         <div class="box_main">
            <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content
               of a page when looking</p>
            <div class="mail_main">
               <input type="text" class="email_text" placeholder="Enter Your email" name="Enter Your email">
               <div class="right_arrow">
                  <a href="#"><img src="images/right-arrow.png"></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- newsletter section end -->
   <!-- cooming  section start -->
   <div class="cooming_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="image_17">
                  <div class="image_17"><img src="images/img-17.png"></div>
               </div>
            </div>
            <div class="col-md-6">
               <h1 class="number_text">01</h1>
               <h1 class="Cooming_soon_taital">Cooming soon</h1>
               <p class="long_text_1">It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking</p>
               <div class="paly_bt"><a href="#">Play Now</a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- cooming  section end -->
   <!-- footer  section start -->
   <?php require_once ('components/footer.php') ?>
   <!-- footer  section end -->
   <!-- copyright section start -->
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
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
</body>

</html>