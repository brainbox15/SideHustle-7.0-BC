<?php
require 'header.php';
?>

<?php
$id = $_GET['ID'];
$delete = mysqli_query($connect, "DELETE FROM posts WHERE ID = '$id'");

if($delete){
    header("Location: all-posts.php");
}
?>