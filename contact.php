<?php
    
require_once 'connection.php';


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/csscontact.css">
</head>
<body>
    <?php
        require "header.php";
    ?>

    <main>
       <div class="row align-items-center">
       
        <h1>Contact Us:</h1>
        
        
        <form action="contact-submit.php" method="post">
          <div class="input">
           <div class="form-group">
               <label>Name:</label>
               <input type="text" name="name" class="form-control">
            </div>
            
            <div class="form-group">
               <label>Email:</label>
               <input type="email" name="email" class="form-control">
            </div>
               
            <div class="form-group">
               <label>Phone:</label>
               <input type="text" name="phone" class="form-control">
            </div>
            
            </div>
            <div class="form-group message">
               <label>Message:</label>
                <textarea type="text" name="message" class="form-control" rows="6" cols="50">
                </textarea>
            </div>    
            
            
            <button type="submit" class="btn btn-success button">Submit</button>
            
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