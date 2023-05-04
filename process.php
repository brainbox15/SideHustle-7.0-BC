<?php
include "header.php";

if(isset($_POST['publish'])){
    $title = $_POST['title'];

    $content = $_POST['content'];


    // inserting data into database.
    $insert_user= mysqli_query($connect, "INSERT INTO posts( title, content) VALUES( '$title', '$content')");
if($insert_user){
    header("location: all-posts.php");
}

}


// Update post
if(isset($_POST['edit_post'])){
    $id =$_POST['post_id'];
    $title =$_POST['post_title'];
    $content =$_POST['post_content'];

    

    
    $update_post = mysqli_query($connect, "UPDATE posts SET title = '$title', content = '$content' WHERE ID = '$id' ");

if($update_post){
header("Location: all-posts.php");

}
}
?>