<?php


require_once ('db.php');


$album_name = $_POST['album_name'];
$releaseyear = $_POST['releaseyear'];
$id=$_POST['id'];
$artist=$_POST['artist'];
$query = "UPDATE album SET album_name='" . $album_name . "',releaseyear='".$releaseyear."',artist='".$artist."' WHERE id=" . $id;
$result = mysqli_query($connection, $query);
if ($result) {
    header("Location:album.php?msg=album Updated successfully");
} else {
    header("Location:album.php?msg= Error in updating  album");
}




?>