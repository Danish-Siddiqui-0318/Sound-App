<?php


require_once ('db.php');


$artist_name = $_POST['artist_name'];
$artist_id = $_POST['artist_id'];
$query = "UPDATE artist SET artist_name='" . $artist_name . "'WHERE artist_id=" . $artist_id;
$result = mysqli_query($connection, $query);
if ($result) {
    header("Location:artist.php?msg=Artist Added successfully");
} else {
    header("Location:artist.php?msg= Error in updating  artist");
}




?>