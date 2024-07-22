<?php

require_once ('db.php');
$video_thumbnail = $_POST['video_thumbnail'];
$video_title = $_POST['video_title'];
$video_year = $_POST['video_genre'];
$video_artist = $_POST['video_description'];
$video_album = $_POST['release_year'];
$video_genre = $_POST['video_artist'];
$id = $_POST['id'];
$query = "UPDATE video SET video_thumbnail='" . $video_thumbnail . "',video_title='" . $video_title . "',video_genre='" . $video_genre . "',video_description='" . $video_description . "',release_year='" . $release_year . "',video_artist='" . $video_artist . "' WHERE id=" . $id;
$result = mysqli_query($connection, $query);
if ($result) {
    header("location:video.php?msg=successfully updated video detail");
} else {
    header("location:users.php?msg=failed to update video detail");
}

?>