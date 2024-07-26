<?php

require_once ('db.php');
$video_title = $_POST['video_title'];
$id = $_POST['id'];
$video_artist = $_POST['video_artist'];
$video_genre = $_POST['video_genre'];
$release_date = $_POST['release_date'];
$video_description = $_POST['video_description'];
$id = $_POST['id'];
$query = "UPDATE video SET video_title='" . $video_title . "',video_genre='" . $video_genre . "',video_description='" . $video_description . "',release_date='" . $release_date . "',video_artist='" . $video_artist . "' WHERE id=" . $id;
$result = mysqli_query($connection, $query);
if ($result) {
    header("location:video.php?msg=successfully updated video detail");
} else {
    header("location:users.php?msg=failed to update video detail");
}

?>