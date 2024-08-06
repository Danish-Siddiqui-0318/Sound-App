<?php
require_once ('admin/db.php');


$music_rating = $_POST['music_rating'];
$id = $_POST['music_id'];

$query = "INSERT INTO music_rating (rating,music_id) VALUES ('" . $music_rating . "','" . $id . "')";
$result = mysqli_query($connection, $query);
if ($result) {
    header("location:music.php?msg=Review Added ");
} else {
    header("location:music.php?msg=Review Not Added Successfully");
}

?>