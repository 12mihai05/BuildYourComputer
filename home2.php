<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/csshome.css">
</head>
<body background="images/background2.png">
   <?php
    require 'header.php';
    ?>
    
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6"><h1 class="welcome">Welcome to<br>BUILD YOUR COMPUTER</h1></div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <h2 class="Q">Is your computer a potato? <br> If yes, then we have the solution to your problem.</h2>
                    
                </div>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
               <div class="col-md-5"><h2 class="check">Check our latest products:</h2></div>
                <div class="col-md-1">
                   <form action="products.php">
                    <button type="submit" class="btn btn-primary buton checkbtn" >Products</button>
                    </form>
                </div>
                <div class="col-md-7"></div>
            </div>
        </div>
    </main>
    
    <footer>
    <?php
        require "footer.php";
    ?>
    </footer>
</body>
</html>


    
