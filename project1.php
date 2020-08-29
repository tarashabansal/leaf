<?php
include("../db.php");
include("functions.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
        <link href="projectcss.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
         <link rel="icon" href="logo_mobile.png">
 
  <title>All Products</title>
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
 

     <style>
         .newrow{
             margin-left: 40px;
         }
        </style>
    </head>
    <body> 
       <?php include_once("navbar1.php");?>  
           
            <div class="newrow">
            
           <?php
                
                
                getPro1();
                
                
                ?>
        </div>
        
    <?php include("footer.php")?>
        <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
         </body>
</html>
