<?php


require_once ('db.php');
$id = $_GET['id'];
$query = "DELETE FROM `music_review` WHERE `id`='$id'";
$result = mysqli_query($connection, $query);
if ($result) {
    header('location:musicreview.php?msg=Video Deleted Successfully');
} else {
    header('location:music.php?msg=Error in Deleting Video ');
}
?>