<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    function connect(){
   $mysqli = new mysqli('localhost', 'root', '', 'db');
   if($mysqli->connect_errno != 0){
      return $mysqli->connect_error;
   }else{
      $mysqli->set_charset("utf8mb4");	
   }
   return $mysqli;
}


    function getAllProducts(){
        $mysqli = connect();
        $res = $mysqli->query("SELECT * FROM products_db ORDER BY price");
        while($row = $res->fetch_assoc()){
            $products[] = $row;
        }
        return $products;
    }

    function getProductsByName($name){
        $mysqli = connect();
        $res = $mysqli->query("SELECT * FROM products_db WHERE name = '$name'");
        while($row = $res->fetch_assoc()){
            $products[] = $row;
        }
        return $products;
    }

    function getProductsByType($type){
        $mysqli = connect();
        $res = $mysqli->query("SELECT * FROM products_db WHERE type = '$type'");
        while($row = $res->fetch_assoc()){
            $products[] = $row;
        }
        return $products;
    }

    function getLowHigh(){
        $mysqli = connect();
        $res = $mysqli->query("SELECT * FROM products_db ORDER BY price");
        while($row = $res->fetch_assoc()){
            $products[] = $row;
        }
        return $products;
    }

    function getHighLow(){
        $mysqli = connect();
        $res = $mysqli->query("SELECT * FROM products_db ORDER BY price DESC");
        while($row = $res->fetch_assoc()){
            $products[] = $row;
        }
        return $products;
    }
    

if(isset($_POST['name'])){
    $name = $_POST['name'];
    
    if($name === ""){
        $products = getAllProducts();
    }else{
        $products = getProductsByName($name);
    }
    
    echo json_encode($products);
}

if(isset($_POST['type'])){
    $type = $_POST['type'];
    
    if($type === ""){
        $products = getAllProducts();
    }else{
        $products = getProductsByType($type);
    }
    
    echo json_encode($products);
}

function getProducts($sort_order){
    $mysqli = connect();
    switch ($sort_order) {
        case "HL":
            $res = $mysqli->query("SELECT * FROM products_db ORDER BY price DESC");
            break;
        case "ND":
            $res = $mysqli->query("SELECT * FROM products_db ORDER BY name DESC");
            break;
        case "NA":
            $res = $mysqli->query("SELECT * FROM products_db ORDER BY name");
            break;
        default:
            $res = $mysqli->query("SELECT * FROM products_db ORDER BY price");
            break;
    }
    while($row = $res->fetch_assoc()){
        $products[] = $row;
    }
    return $products;
}

if(isset($_POST['price'])){
    $sort_order = $_POST['price'];
    $products = getProducts($sort_order);
    echo json_encode($products);
}

?>