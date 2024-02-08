<?php

require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/csshf.css">
</head>
<body>
    <div class="top">
        <div class="container">
            <div class="row">
                
                <div class="col-md-3">
                   <a href="home2.php"><img src="images/logo.png" class="logo"></a>
                </div>

                <div class="col-md-6">
                    <ul class="navigation">
                        <li><a href="home2.php">HOME</a></li>
                        <li><a href="products.php">PRODUCTS</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3">
                    <ul class="social">
                        <li><a href="cart.php" class="cart"><img src="images/cart.png" alt=""><sup><?php echo mysqli_num_rows($all_cart); ?></sup></a></li>
                    </ul>

                </div>
                            
            </div>
        </div>
    </div>
</body>
</html>