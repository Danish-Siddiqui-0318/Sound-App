<?php

require_once ('db.php');
$music_title = $_POST['music_title'];
$music_year = $_POST['music_year'];
$music_artist = $_POST['music_artist'];
$music_album = $_POST['music_album'];
$music_genre = $_POST['music_genre'];
$id = $_POST['id'];
$query = "UPDATE music SET music_title='" . $music_title . "',music_year='" . $music_year . "',music_artist='" . $music_artist . "',music_album='" . $music_album . "',music_genre='" . $music_genre . "' WHERE id=" . $id;
$result = mysqli_query($connection, $query);
if ($result) {
    header("location:music.php?msg=successfully updated music detail");
} else {
    header("location:users.php?msg=failed to update music detail");
}

?>