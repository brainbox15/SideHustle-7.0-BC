<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BootCamp_Project_4</title>
    <link rel="stylesheet" href="css/blog.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
  </head>
  <body>
    <header class="header_container">
      <nav class="nav-container-1">
        <ul>
         <a href="home.php"> <li>Home</li> </a>
          <li>Collections</li>
          <li>Most popular</li>
        </ul>
      </nav>

      <nav class="nav-container-2">
        <h2>PenSpace Blog</h2>
      </nav>

      <nav class="nav-container-3">
        <ul>
        <a href="editor.php" id="editor"> <li>My editor</li></a> 
          <li>My cart</li>
        </ul>
        <span class="material-symbols-outlined"> search </span>
      </nav>
    </header>
    <main class="main-container">
      <section class="section-container-1">
        <ul>
          <li class="one">01</li>
          <li class="two">02</li>
          <li class="three">03</li>
          <li class="four">04</li>
        </ul>
      </section>

      <section class="section-container-2">
        <p>20 january 2021 <span></span> Blog</p>
        <!-- <h1>We Create a<br> modern beautiful<br> photo</h1> -->
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

<!-- <h2>View post</h2> -->
<h1>  <?= $post_details['title'] ?> </h1>

<img src="./img/img1.jpg" alt="beach_image" width="400px" />

<p id="content" >  <?= $post_details['content'] ?> </p>

        <ul>
          <li>Facebook</li>
          <li>Instagram</li>
          <li>Twitter</li>
        </ul>
      </section>

      <section class="section-container-3">
        <!-- <span>0</span> -->
        <article class="article-container1 article-container">
          <h3>Air drone</h3>
          <p>
            We used a drone and took photos at<br> different times of the day. Do<br>
            you go away often, and beautiful photos<br> are your favorite souvenirs
            from every vacation?<br> Think about bringing a drone.
          </p>
        </article>
        <article class="article-container1">
          <h3>Knowledge</h3>
          <p>
            We are a team of experienced<br> people who implement the most advanced<br>
            project.
          </p>
          <h5>Send your inquiry</h5>
        </article>
      </section>
    </main>
  </body>
</html>
