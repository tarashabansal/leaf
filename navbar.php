<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="css/styles.css">

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cousine&display=swap" rel="stylesheet">

    <!-- font-awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- title -->
	<title>Leaf.Co</title>
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
    </style>
</head>
<body style="background-color: #fff;">
		<section id="title">
		    <div class ="container-fluid">
		    <!-- Nav Bar -->
			    <nav class="navbar navbar-expand-lg navbar-light">
			       <a href="index.php"> <img src="logo.png"  alt="" class="d-inline-block align-middle mr-2 rounded-circle logo"></a>
			       
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarSupportedContent">
				        <ul class="navbar-nav ml-auto">
				            <li class="navbar-item">
				                <a class="nav-link" href="index.php">Home</a>
				            </li>
				            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Shop
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a tabindex="-1" href="project1.php">All Products</a></li>
                                   <li><a tabindex="-1" href="module2.php">Vertical Gardens</a></li>
<?php
                                    include("../db.php");
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
                      
                                
                                 
                                
						  
				            <li class="navbar-item">
				                <a class="nav-link" href="#before-abus">About</a>
				            </li>
				            <li class="navbar-item">
				                <a class="nav-link" href="">Contact</a>
				            </li>

				            <li class="navbar-item ">
                      
                        <a class="nav-link" href="C:/Users/BENAZEER/Desktop/Project/New folder/index.html"><i class="fas fa-user-circle fa-1x"></i></a>
                      
				            </li>
				            <li class="navbar-item">
				                <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart fa-1x"></i></a>
				            </li>
				            
				        </ul>
			        </div>
			    </nav>
		</div>
	</section>
   <script type="text/javascript">
      $(window).scroll(function()
      {
        if($(window).scrollTop()>200)
        {
            $("#top").show();
        }
        else
        {
            $("#top").hide();
        }
      }
      );

      $("#top").click(function()
      {
          $("html").animate({scrollTop:0});
      });

    </script>
   
   
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
