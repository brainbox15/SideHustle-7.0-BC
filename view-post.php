
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="all-posts.php">All posts</a>

<?php
include 'header.php';
?>

<?php
$id = $_GET['ID'];
$post = mysqli_query($connect, "SELECT * FROM posts WHERE ID = '$id'");

$post_details = mysqli_fetch_assoc($post);
if(!$post_details){
exit("post not found");
}
?>

<h2>View post</h2>

<p>  <?= $post_details['title'] ?> </p>
<p>  <?= $post_details['content'] ?> </p>


</body>
</html>