<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Filter And Search</title>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/cssproducts.css" />
  </head>
  <body>
    <?php
      include "header.php";
      ?>
      
      <div class="select">
                  
          
           <select name="name" id="name">
         <option value="">All Brands</option>
         <option value=" ASUS">ASUS</option>
         <option value=" MSI">MSI</option>
         <option value=" GIGABYTE">GIGABYTE</option>
         <option value=" INTEL">INTEL</option>
         <option value=" AMD">AMD</option>
         <option value=" HyperX">HyperX</option>
         <option value=" Corsair">Corsair</option>
         <option value=" Kingston">Kingston</option>
         <option value=" Samsung">Samsung</option>
         <option value=" Western Digital">Western Digital</option>
         <option value=" Seagate">Seagate</option>
         <option value=" ASRock">ASRock</option>
         <option value=" Seasonic">Seasonic</option>
         <option value=" Thermaltake">Thermaltake</option>
         <option value=" Segotep">Segotep</option>
         <option value=" Noctua">Noctua</option>
         <option value=" ID-Cooling">ID-Cooling</option>
      </select>
      
      <select name="price" id="price">
              <option value="">Low->High</option>
              <option value="HL">High->Low</option>
              <option value="NA">Name Ascending</option>
              <option value="ND">Name Descending</option>
          </select>  
      
      <select name="type" id="type">
         <option value="">All Types</option>
         <option value="Graphics Card">Graphics Card</option>
         <option value="Processor">Processor</option>
         <option value="Memory">Memory</option>
         <option value="Storage">Storage</option>
         <option value="Motherboard">Motherboard</option>
         <option value="Power Supply">Power Supply</option>
         <option value="PC Case">PC Case</option>
         <option value="CPU Cooler">CPU Cooler</option>
      </select>
       </div>
      
    <div class="wrapper">
      <form  action="form.php" method="post">
        <input type="text" name="search" placeholder="Search product name here.." required class="search">
        <input type="submit" value="Search" class="submit">
      </form>
    </div>

     <main class="main">
      <?php
      if (isset($_POST["search"])) {
        require "search.php";

        if (count($results)>0) {
          foreach ($results as $row) { ?>
            <div class="card">
              <div class="image">
                <img src="<?php echo $row["image"]; ?>" alt="">
              </div>
              <div class="caption">
                <p class="product_name"><?php echo $row["type"],$row["name"] ?></p>
                <p class="product_model"><?php echo $row["model"] ?></p>
                <p class="price"><b>$ <?php echo $row["price"] ?></b></p>
              </div>
              <button class="add">Add to cart</button>
            </div>
          <?php }
        } else {
            echo "No results found";
        }
      }
      ?>
      <footer><?php
      include "footer.php";
      ?></footer>
      </main>

  </body>
</html>
