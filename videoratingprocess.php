<?php
require_once ('admin/db.php');


$video_rating = $_POST['video_rating'];
$id = $_POST['video_id'];

$query = "INSERT INTO video_rating (rating,video_id) VALUES ('" . $video_rating . "','" . $id . "')";
$result = mysqli_query($connection, $query);
if ($result) {
    header("location:music.php?msg=Review Added ");
} else {
    header("location:music.php?msg=Review Not Added Successfully");
}

?>