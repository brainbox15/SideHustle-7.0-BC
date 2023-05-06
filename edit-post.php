<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="editor.css">
</head>
<body>
    <a href="all-posts.php">All posts</a>
 <?php
include "header.php";

$id = $_GET['ID'];
$post = mysqli_query($connect, "SELECT * FROM posts WHERE ID = '$id'");

if(!$post){
exit('post not found');
}

$post_details = mysqli_fetch_assoc($post);
?>




<h2>Edit post</h2>
<form action="process.php" method="post">
<input type="hidden" value="<?php  echo $id ?>" name="post_id" >

<!-- <input type="text" name="post_title" placeholder="Title" value="<?php echo $post_details['title'] ?>"><br> -->
<textarea  type="text" class="title" name="post_title" placeholder="Title" value="<?php echo $post_details['title'] ?>" ></textarea>



<!-- <input type="text" name="post_content" value="<?php echo $post_details['content'] ?>"><br> -->
<textarea cols="40" rows="20" placeholder="Start writing here..." type="text" name="post_content" value="<?php echo $post_details['content'] ?>" ></textarea>

<input id="pub" type="submit" value="Update" name="edit_post" >

</form>
</body>
</html>