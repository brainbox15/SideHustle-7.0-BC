<?php require "sessionstart.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editor.css">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
        <!-- <input type="text" name="title" placeholder="Enter title"> -->
        <textarea type="text" class="title" name="title" placeholder="Blog title..." ></textarea>

        <!-- <input type="text" name="summary" placeholder="Enter post summary"> -->
        <textarea  type="text" name="content" id="" cols="40" rows="20" placeholder="Start writing here..."></textarea>

        <input type="submit" name="publish" value="Publish" id="pub">
    </form>

</body>

</html>