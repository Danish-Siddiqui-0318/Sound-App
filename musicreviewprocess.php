<?php
require_once ('admin/db.php');


$music_review = $_POST['musicreview'];
$id = $_POST['music_id'];

$query = "INSERT INTO music_review (review,music_id) VALUES ('" . $music_review . "','" . $id . "')";
$result = mysqli_query($connection, $query);
if ($result) {
    header("location:music.php?msg=Review Added ");
} else {
    header("location:music.php?msg=Review Not Added Successfully");
}

?>