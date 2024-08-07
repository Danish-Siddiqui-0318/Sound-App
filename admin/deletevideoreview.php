<?php


require_once ('db.php');
$id = $_GET['id'];
$query = "DELETE FROM `video_review` WHERE `id`='$id'";
$result = mysqli_query($connection, $query);
if ($result) {
    header('location:videoreview.php?msg=Video Deleted Successfully');
} else {
    header('location:videoreview.php?msg=Error in Deleting Video ');
}
?>