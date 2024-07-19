<?php
require_once ('db.php');
$temp_name = $_FILES['music_loc']['tmp_name'];
$fileName = $_FILES['music_loc']['name'];
$music = "music/$fileName";
if (move_uploaded_file($temp_name, $music)) {
    session_start();
    $music_title = $_POST['music_title'];
    $music_year = $_POST['music_year'];
    $music_artist = $_POST['music_artist'];
    $music_album = $_POST['music_album'];
    $music_genre = $_POST['music_genre'];
    $query = "INSERT INTO music (music_loc,music_title,music_year,music_artist,music_album,music_genre) VALUES ('" . $music . "','" . $music_title . "','" . $music_year . "','" . $music_artist . "','" . $music_album . "','" . $music_genre . "')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location:music.php?msg=Music Added successfully");
    } else {
        header("Location:addmusic.php?msg= Error in adding music");
    }
}


?>