<?php

require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

$arr = array('0');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <title>Cart</title>
</head>
<body>
    <?php
       include_once 'header.php';

    ?>

    <main>
        <h1><?php echo mysqli_num_rows($all_cart); ?> Items</h1>
        <hr>
        <?php
          while($row_cart = mysqli_fetch_assoc($all_cart)){
              $sql = "SELECT * FROM products_db WHERE id=".$row_cart["id"];
              $all_product = $conn->query($sql);
              while($row = mysqli_fetch_assoc($all_product)){
        ?>
        <div class="card">
            <div class="image">
                <img src="<?php echo $row["image"]; ?>" alt="">
            </div>

            <div class="caption">
                <p class="product_name"><?php echo $row["type"],$row["name"],$row["model"]; ?></p>
                <p class="price"><b>$<?php echo $row["price"]; ?></b></p>
                <button class="remove" data-id="<?php echo $row["id"]; ?>">Remove from Cart</button>
            </div>
        </div>
        <?php
            
               array_push($arr, $row["price"]);
          }

        }
        ?>
       
    </main>

    
    <footer>
    <hr>
        <h4 class="total">Total: $<?php echo array_sum($arr); ?>
       </h4>
    <?php
        require "footer.php";
    ?>
    </footer>

    <script>
        var remove = document.getElementsByClassName("remove");
        for(var i = 0; i<remove.length; i++){
            remove[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","connection.php?cart_id="+cart_id,true);
                xml.send();
            })
        }
    </script>
</body>
</html>