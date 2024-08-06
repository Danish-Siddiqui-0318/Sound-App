<?php
require_once ('admin/db.php');


$video_review = $_POST['videoreview'];
$id = $_POST['video_id'];

$query = "INSERT INTO video_review (review,video_id) VALUES ('" . $video_review . "','" . $id . "')";
$result = mysqli_query($connection, $query);
if ($result) {
    header("location:video.php?msg=Review Added ");
} else {
    header("location:video.php?msg=Review Not Added Successfully");
}
?>