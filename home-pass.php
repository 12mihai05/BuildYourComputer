<?php

    $text = $_POST['text'];
        
    if(strtoupper($text) === "AY AY CAPTAIN"){
        header('location:home2.php');
    }else{
        header('location:homewrong.php');
    }

?>