<?php include("../db.php");?><html lang="en">
<head>
<!--    <meta charset="UTF-8">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     
   <link rel="icon" href="logo_mobile.png">
    <style>
        
        .dropdown .btn-default{
    color: #333;
    background-color: #fff;
     border-color: #fff; 
    font-size: 14px;
    line-height: 1.42857143;
    color: #777;
    text-transform: uppercase;
    border-radius: 0px;
            font-weight: bold;
            border: 0px;
            height: 50px;}
        .dropdown .btn-default:hover{
            background-color: #f0f0f0;
            color: black;
        }
        #out{
            border:0px;
            background-color: transparent;
        }
        #out:hover{
            text-decoration: underline;
        }
        #in,#in1{
            color:black;
        }
    </style>
</head>
<body>
   
  
   
   <div id="navbar" class="navbar navbar-default" style="background-color:#fff"><!-- navbar navbar-default Begin -->
       
       <div class="contain"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="logo.png" alt="M-dev-Store Logo" class="hidden-xs" height="40px">
                   <img src="logo_mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li >
                           <a href="index.php">Home</a>
                       </li>
                        
   <li>
                          <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Shop
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a tabindex="-1" href="project1.php">All Products</a></li>
                                   <li><a tabindex="-1" href="module2.php">Vertical Gardens</a></li>
<?php
                                  $get_p_cats = "select * from category";

                                                    $run_p_cats = mysqli_query($con,$get_p_cats);

                                                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                                                        $cat_id = $row_p_cats['cat_id'];

                                                        $category_name = $row_p_cats['category_name'];

                                                        echo "
                                                            <li><a tabindex='-1' href='productbycat.php?name=$category_name'>$category_name</a></li>
                                                        ";
                                                    }
                                    ?><li class="dropdown-submenu">
                                    <a class="test" tabindex="-1" href="#">House Plants <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
<?php 

                                                    $get_p_cats = "select * from houseplants";

                                                    $run_p_cats = mysqli_query($con,$get_p_cats);

                                                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                                                        $category_name = $row_p_cats['cat_name'];

                                                        echo "
                                                            <li><a tabindex='-1' href='productbycat.php?name=$category_name'>$category_name</a></li>
                                                        ";
                                                    }
                                                    
                                      ?></ul>
                                  </li>
                                 
                                </ul>
                          </div>
                        </li>
                      
                       <li>
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="index.php#before-abus">About</a>
                       </li>
                       <li>
                           <a href="index.php#contact">Contact</a>
                       </li>
                       <li>
                           <a href="donation1.php">Make a Donation</a>
                       </li>
                       <?php
                         include("../db.php");
                       $emailid="admin@gmail.com";
                            $result = mysqli_query($con,"SELECT *  FROM currentuser where email='$emailid'"); 
                            
                       if(mysqli_num_rows($result)!=0)
                       {
                           echo"
                           <li>
                           <a href='insert.php'>Insert Products</a>
                        </li>
                           ";
                       }
                       ?>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
                                     <a href="" onclick=""></a>
                                     
                                        <?php
                         include("../db.php");
              
               
             echo"  <a href='login.php' id='in'>Login|</a> <a href='login.php' id='in1'>Signup</a><form method='post'>
             <label id='out'>Hi,<span id='fname'></span></label>
             <input type='submit' value='Signout' name='signout' id='out'></form>
             
             
             ";
                $get_p_cats = "select * from currentuser";

                                                    $run_p_cats = mysqli_query($con,$get_p_cats);

                                                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                                                        $name = $row_p_cats['firstname'];


                                                        echo "
                                                           <script>
                                                           document.getElementById('fname').innerHTML='$name';
                                                           </script>
                                                        ";
                                                    }
               
              if(isset($_POST['signout'])){
                  $query="delete from currentuser";
                  $run=mysqli_query($con,$query);
                  echo"
                  <script>
                  alert('You have successfully logged out');
                  window.location.replace('index.php');
                  </script>
                  
                  ";
                  $query="delete from cart";
                  $run=mysqli_query($con,$query);
              }
                            $result = mysqli_query($con,'SELECT COUNT(*) AS value_sum FROM currentuser'); 
                            $row = mysqli_fetch_assoc($result); 
                                $sum = $row['value_sum'];
                       if($sum!=0)
                       {
                           echo"
                            <style>
                                #in,#in1{
                                    display:none;
                                    
                                }
                                #out{
                                margin-left:450px;
                                }
                                </style>
                           ";
                           
                       }
                        else{
                            echo"
                            <style>
                                #out{
                                    
                                    display:none;
                                }
                                #in{
                                    margin-left: 530px;
                                    
                                }
                                </style>
                           ";
                        }
                            
                       ?>

               <a href="cart.php" class="btn navbar-btn btn-primary right" style="margin-right:400px;  margin-top:-20px" ><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   <?php
                   include("../db.php");
                   $result = mysqli_query($con,'SELECT SUM(quantity) AS value_sum FROM cart'); 
                    $row = mysqli_fetch_assoc($result); 
                    $sum = $row['value_sum'];
                   if($sum==0)
                   {
                       echo"<span> No Items In Your Cart</span>";
                   }
                   elseif($sum==1)
                   {
                       echo"<span> $sum Item In Your Cart</span>";
                   }
                   else{
                   echo"<span> $sum Items In Your Cart</span>";
                     }
                       ?>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               
                   
           </div>
           
       </div><!-- container Finish -->

   </div><!-- navbar navbar-default Finish -->
   
   <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

  
    <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
    </body>
</html>