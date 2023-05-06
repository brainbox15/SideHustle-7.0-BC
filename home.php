<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/117feff65f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/home.css">
  <title>PenSpace Blog : Homepage</title>

  <style>
    #container{
      display: flex;
      justify-content: center;
      /* align-items: center; */
      flex-direction: column;
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <h1 class="logo">PenSpace</h1>
    <ul class="link-container">
      <li class="link-items"><a href="/" class="link">Home</a></li>
      <li class="link-items"><a href="#" class="link">Product</a><i class="fa fa-angle-down"></i></li>
      <li class="link-items"><a href="#" class="link">Resources</a><i class="fa fa-angle-down"></i></li>
      <li class="link-items"><a href="#" class="link">Pricing</a></li>
    </ul>
    <div class="link">
    <a href="signup.php">Sign Up</a> 
    <a href="editor.php"  id="editor-link">Editor</a> 
    </div>
  </nav>
  <main>
    <div class="container">
      <div class="heading-row">
        <div class="headingSect">
          <h1>PenSpace Blog</h1>
          <div class="input-wrap">
            <input type="email" class="input-box" placeholder="Enter your email" required>
            <button type="submit">Subscribe</button>
          </div>
        </div>
        <div class="headingSect">
          <p>New product features, the latest in home decor, 
            DIY, space planning, and updates.</p>
        </div>
      </div>
      <div class="article-section-heading">
        <ul class="article-section-list">
          <li><a href="#">View All</a></li>
          <li><a href="#">Design</a></li>
          <li><a href="#">Product</a></li>
          <li><a href="#">Development</a></li>
          <li><a href="#">Customer Support</a></li>
          <li><a href="#">Leadership</a></li>
          <li><a href="#">Management</a></li>
          <li><a href="#">Interviews</a></li>
        </ul>
      </div>
      <div class="articles">
        <!-- <div class="article-card">
          <img src="img/img1.jpg">
          <h2 class="heading">Interior Design Trends : from moss-core to lighting</h2>
          <p>Milan Design Week was back in full force this year, with luminaries from the interiors, architecture, and fashion worlds convening to get a sneak peak at all things new and noteworthy. </p>
          <div class="read">
            <a href="#">Read Post</a>
          </div>
        </div>
        <div class="article-card">
          <img src="./img/img2.jpg">
          <h2 class="heading">Raising a Decorating Genius? A Bold Nursery Is a Good Way to Begin.</h2>
          <p>At the risk of offending a flotilla of momfluencers, I’ll say it: Having an aesthetically flawless nursery does not matter. Not to the baby, at least.</p>
          <div class="read">
            <a href="#">Read Post</a>
          </div>
        </div> -->

        <?php   
include "header.php";
$posts = mysqli_query($connect, 'SELECT * FROM posts');

?>
<!-- <a href="editor.html"><button>Add New post</button> </a>
<h2>All posts</h2> -->

    <!-- <thead>
        <td>S/N</td>
        <td>Title</td>
        <td>Content</td>
        <Td>Action</Td>

    </thead> -->
    
        <?php
        foreach ($posts as $post): ?>
    
        <!-- <td><?= $post['ID'] ?></td> -->
        <div id="container" >
        <div id="container-item1" ><img src="img/img2.jpg"> <br> <?= $post['title'] ?> </div>
         <div id="container-item2"> <?= $post['content'] ?> <div class="read">
            <a href="blog.php?ID=<?= $post['ID'] ?>">Read Post</a>
          </div> </div>
        </div>


        <!-- <td>
 

        </td> -->

    
    <?php 
    endforeach;
     ?>
    

      </div>
    </div>
  </main>
</body>
</html>