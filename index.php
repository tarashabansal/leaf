<?phpinclude("../db.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- icon -->
	<link rel="icon" href="logo_mobile.png">

	<!-- css -->
	<link rel="stylesheet" href="css/styles.css">

	<!-- bootstrap -->


<!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
-->


    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Italianno|Yesteryear&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cousine&display=swap" rel="stylesheet">

    <!-- font-awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- title -->
	<title>Leaf.Co</title>

</head>
<body style="background-color: #fff;">
		<?php include("navbar1.php");?>
  
      
      
    <a href="" id="top"><p id="arrow"></p></a>
  
	<div id="carouselExampleControls" class="carousel slide " data-ride="carousel" data-interval=3000 >
  <div class="carousel-inner top-container">
    <div class="carousel-item active"id="top-container1" style="background-image: url('images/bgimg.jpg');">
       
    <p class="top-p1">
      Gardening adds years to your life and life to your years and so do <strong>WE</strong>.
    </p>
      
    </div>
<!--
    <div class="carousel-item"id="top-container2" style="background-image: url('images/bg2img.jpg');">
       
    <p class="top-p2">
      Gardening adds years to your life and life to your years and so do <strong>WE</strong>.
    </p>
      
    </div>
-->
    <!--<div class="carousel-item">
      <img class="d-block w-100" src="images/bg2img.jpg" alt="Third slide"">

    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" >
    <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" >
    <span class="carousel-control-next-icon"  aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- products -->
    <section class="prod">
      <h1 class="ph">CATEGORIES</h1>
      <hr style="width: 25%; border-color: #616f39;">
      <div class="row">
      <?php
          include("../db.php");
          $get_p_cats = "select * from category";

                                                    $run_p_cats = mysqli_query($con,$get_p_cats);

                                                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                                                        $cat_id = $row_p_cats['cat_id'];

                                                        $category_name = $row_p_cats['category_name'];
                                                        
                                                        $image = $row_p_cats['cat_pic'];

                                                        echo "
                                                            <div class='p1 column'>
                                                              <div class='card'style='width:300px'>
                                                               <a href='productbycat.php?name=$category_name'><img src='images/$image' class='image'></a>
                                                                <div class='middle'>
                                                                                <div class='text'>
                                                                                    <h4><b>$category_name</b></h4>
                                                                                     <a href='productbycat.php?name=$category_name' class='btn default-btn' style='color: white;'>Explore</a>
                                                                                </div>

                                                                            </div>
                                                            </div>
                                                            </div>
                                                        ";
                                                    }
          $get_p_cats = "select * from houseplants";

                                                    $run_p_cats = mysqli_query($con,$get_p_cats);

                                                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                                                        $category_name = $row_p_cats['cat_name'];
                                                        $image = $row_p_cats['cat_pic'];

                                                        echo "
                                                            <div class='column'>
                                                              <div class='card' style='width:300px'>
                                                               <a href='productbycat.php?name=$category_name'><img src='images/$image' class='image' ></a>
                                                                <div class='middle'>
                                                                                <div class='text'>
                                                                                    <h4><b>$category_name</b></h4>
                                                                                     <a href='productbycat.php?name=$category_name' class='btn default-btn' style='color: white;'>Explore</a>
                                                                                </div>

                                                                            </div>
                                                            </div>
                                                            </div>
                                                        ";
                                                    }
          
          
          ?>

    </div>
    </section>
    
   

    <!-- features -->
    <section class="features container-fluid">
      <h1 class="fh">FEATURES</h1>
      <hr style="width: 25%; border-color: #616f39;">
      <div class="row">
        <div class="f1 column" >
        <img src="images/plnt_smple.png" class="fimg">
        <h2>Plants, Simplified</h2>
        <p class="fp">
          Order plants ready to be placed in your home, office or garden. Just Unpack, Relax and Enjoy your green buddies.
        </p>
      </div>
      <div class="f2  column">
        <img src="images/sec_ship.jpg" class="fimg">
        <h2>Secure Shipping</h2>
        <p class="fp">Our unique packaging will hold the plants in place and let the plant breathe, so that it reaches you fresh without any mess.</p>
      </div>
      <div class="f3  column" >
        <img src="images/dg.png" class="fimg">
        <h2>Detailed Guidance</h2>
        <p class="fp">Get detailed plant care instructions from the website as well as real-time guidance from our Garden Experts on Whatsapp.</p>
      </div>
      </div>
      
    </section>

    
    <!-- top-container -->
    <section id="before-abus">
      
    </section>
    <!-- about-us -->
    <section id="about-us" class="container-fluid" style="margin-top: 3%;
	margin-right: 0%;
	margin-left: 3%;
	padding: 0 0 0 0;
	background-color: #fff;
	margin-bottom: 3%;">
    	<div class="cont-abus" style="width: 50%;
	font-size: 1.17rem;
	line-height: 1.5;
	text-align: center;
	padding: 30px;
	display: inline-block;
	height: 100%;
	position: relative;
	float: left;">
    		<h1 class="h-abus" style="padding-top: 0;
	margin-top: 0;
	font-weight: 100;">ABOUT US</h1>
        <hr style="width: 45%;border-color: #616f39">
    		<p class="p-abus" style="margin-top: 32px;
	line-height: 2;
	font-weight: 390;">It is an eco-friendly organization. We take certain measures to
				help the environment is our own small ways. We encourage the no
				plastic policy by making deliveries in eco friendly ways like using
				cloth bags and non-polluting vehicles (CNG vehicles and bicycles).
				We sell products on all fronts of plantation like different soils for
				your garden, or seeds and organic manure to promote gardening
				in and around houses. We also promote vertical gardening for
				houses that do not have a garden for traditional gardening. We
				encourage our customers to join our monthly awareness camp
				and donation drives.
    		</p>
    	</div>
    	<div class="img-abus" >
    		<img class="img1-abus" src="images/au1.jpg">
    		<img class="img2-abus" src="images/leaf-abus.jpg">
    	</div>
    </section>

    <!-- contact-us -->
    <section class="contact_area" id="contact" style="">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h1 class="ch" style="font-weight: 100; position: relative; left: 4%;">CONTACT US</h1>
           <hr style="width: 30%;border-color: #616f39; padding-bottom: 80px; position: relative;
            left: 4%;">
          </div>
       </div>
        <div class="row">
          <div class="col-sm-3 divider">
            <h3 class="cah3">CONTACT</h3>
            <div class="contact-address">
              <ul class="ca-ul-li">
                <li class="ca-ul-li">
                  <i class="fa fa-home ca-ul-li-fa"></i>
                  <div class="address-phone">
                    <h4 class="cah4">Address</h4>
                    <span class="ca-span">#11 new street</span>
                    <span class="ca-span">Jayanagar, Bangalore.</span>
                  </div>
                </li>

                <li class="ca-ul-li">
                  <i class="fa fa-phone ca-ul-li-fa"></i>
                  <div class="address-phone">
                    <h4 class="cah4">Phone</h4>
                    <span class="ca-span">+91 8123413059</span>
                    <span class="ca-span">+91 8971654321</span>
                  </div>
                </li>

                <li class="ca-ul-li">
                  <i class="fa fa-paper-plane ca-ul-li-fa"></i>
                  <div class="address-phone">
                    <h4 class="cah4">E-mail</h4>
                    <span class="ca-span">khan.bush10@gmail.com</span>
                    <span class="ca-span">hari.harsh@gmail.com</span>
                  </div>
                </li>


              </ul>
            </div>
            
          </div>
          
          <div class="col-sm-9">
            <div class="contact-block">
              <h3 class="cah3">DROP A MESSAGE</h3>
              <form class="contact_form">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Name" name="" required="required">
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="contact@email" name="" required="required">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Phone Number" name="" required="required">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <textarea class="form-control" required="required"></textarea>
                    </div>
                     <div class="form-group">
                      <input type="submit" value="Submit Queries" class="btn default-btn btn-block">
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div>

         </div>

      </div>
    </section>
    <div id="footer" style="background-color:#f1f3f4;    margin-left: 82px;"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Pages</h4>
                
                <ul style="list-style-type:none"><!-- ul Begin -->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="index.php#contact">Contact Us</a></li>
                    <li><a href="project1.php">Shop</a></li>
                </ul><!-- ul Finish -->
                
                <hr>
                
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Top Products Categories</h4>
                
                <ul style="list-style-type:none"><!-- ul Begin -->
                
                    <?php 
                    
                        $get_p_cats = "select * from houseplants";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                         
                            
                            $category_name = $row_p_cats['cat_name'];
                            
                            echo "
                            
                                <li>
                                
                                    <a href='productbycat.php?name=$category_name'>
                                    
                                        $category_name
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Find Us</h4>
                
                <p><!-- p Start -->
                    
                    <strong>Leaf.Co</strong>
                    <br/>Bangalore
                    <br/>Karnataka
                    <br/>0818-0683-3157
                    <br/>BCA2020@gmail.com
                    
                    
                </p><!-- p Finish -->
                
                <a href="index.php#contact">Check Our Contact Page</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Get The News</h4>
                
                <p class="text-muted">
                    Dont miss our latest update products.
                </p>
                
                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=M-devMedia', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <input type="hidden" value="M-devMedia" name="uri"/><input type="hidden" name="loc" value="en_US"/>
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="subscribe" class="btn btn-default">
                            
                        </span><!-- input-group-btn Finish -->
                        
                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->
                
                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="https://www.facebook.com/" > <img src="pictures/icons8-facebook-f-24.png" alt=""></a>
                    <a href="https://twitter.com/" ><img src="pictures/icons8-twitter-24.png" alt=""></a>
                    <a href="https://www.instagram.com/" ><img src="pictures/icons8-instagram-26.png" alt=""></a>
                    <a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=AddSession"><img src="pictures/icons8-envelope-24.png" alt=""></a>
                </p>
                
            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->

  </body>
</html>