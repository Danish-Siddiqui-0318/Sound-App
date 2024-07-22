<?php
require_once ('db.php');
$temp_name = $_FILES['video_loc']['tmp_name'];
$fileName = $_FILES['video_loc']['name'];
$video = "video/$fileName";
if (move_uploaded_file($temp_name, $video)) {
    session_start();
    $video_thumbnail = $_POST['video_thumbnail'];
    $video_title = $_POST['video_title'];
    $video_genre = $_POST['video_genre'];
    $video_description = $_POST['video_description'];
    $release_year = $_POST['release_year'];
    $video_artist = $_POST['video_artist'];
    $query = "INSERT INTO video (video_loc,video_thumbnail,video_title,video_genre,video_description,release_year,video_artist) VALUES ('" . $video . "','" . $video_thumbnail . "','" . $video_title . "','" . $video_genre . "','" . $video_description . "','" . $release_year . "','" . $video_artist . "')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location:video.php?msg=Video Added successfully");
    } else {
        header("Location:addvideo.php?msg= Error in adding video");
    }
}


?>