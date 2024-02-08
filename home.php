<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/csshome.css">
</head>
<body background="images/background.png">
   <?php
    require 'header.php';
    ?>
    
    <main>
        <h1 class="title">ARE YOU READY KIDS?</h1>
        <div class="pass">
        <form action="home-pass.php" method="post">
           <div class="pass"></div>
            <input type="text" name="text" class="form-control">
            <button type="submit" class="btn btn-primary button">Submit</button>
        </form>
        </div>
    </main>
    
    <footer>
    <?php
        require "footer.php";
    ?>
    </footer>
</body>
</html>