<html>
   <head>
    <link rel="stylesheet" href="cartcss.css">
     <link rel="icon" href="logo_mobile.png">
       <title>Shopping Cart</title>  
       <style>
       body{
        height:20vh;  
       }
            
           .backlink{
              
               
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
               border: 2px solid black;
            
           } 
           .backlink:before{
                content: "<";
           }
           .backlink:hover{
               text-decoration: none;
               color: white;
               background-color: black;
           }
           #clearbtn{
              background-color:#d63447; 
               margin-right:20px;
           }
           #clearbtn:hover{
               background-color: #ce0f3d;
           }
        
    </style>
    
</head>
<body>
<?php include("navbar1.php");?>
<br><br><br>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>
   <?php
      include("../db.php");
   
    $result = mysqli_query($con,'SELECT SUM(quantity) AS value_sum FROM cart'); 
                    $row = mysqli_fetch_assoc($result); 
                    $sum = $row['value_sum'];
    $sumtotal=0;
    $total=0;
    if($sum==0){
        echo"
        
        <style>
            .column-labels{
            display:none;
            }
            .totals{
            display:none;
            }
            .buttoms{
            display:none;
            }
            #footer{
            margin-top:15em;
            }
           
            
        </style>
        <center>
        <h2 class='no-items'><b> You have no items in your cart</b></h2><br>
        <img src='pictures/empty1.png'><br>
        <a href='project1.php' style='text-decoration:underline; color:black;font-size:20px'>Shop Now!</a>
        </center>
        ";
    }
    else{
        echo"
        <style>
            #footer{
            margin-top:9em;
            }
           
            
        </style>
        ";
    }
    
$get_plants="select * from cart";
    $sumtotal=0;
    $grandtotal=0;
    $shipping=0;
    $tax=0;
    $display=mysqli_query($con,$get_plants);
    while($row_products=mysqli_fetch_array($display)){
        $product_id=$row_products['product_id'];
        $product_name=$row_products['product_name'];
        $price=$row_products['price'];
        $image=$row_products['image'];
        $qty=$row_products['quantity'];
        $total=$price*$qty;
       
        echo"
        <form method='post'>

         <div class='product'>
         <div class='product-image'>
      <img src='project%20products/$image'>
    </div>
    <div class='product-details'>
      <div class='product-title'>$product_name</div>
      
    </div>
    <div class='product-price'>$price</div>
    <div class='product-quantity' style='justify-content:center'>
    
     &nbsp;&nbsp;&nbsp;&nbsp; $qty

     
    </div>
    
     <div class='product-removal'>

          <div> <input type='submit' name='remove_btn_$product_id' data-prod-id='$product_id' class='remove-product' value='Remove'></div>
    </div>
        <div class='product-line-price'>$total</div>
        </div>
     </form>
     
    ";
       
    if(isset($_POST["remove_btn_$product_id"])){
   $query="delete from cart where product_id=$product_id";
    $run=mysqli_query($con,$query);
        echo "<script>
        
       function refresh(){
           location.reload(true);
           
       }
       
       refresh();
       
       </script>
       
       ";}
        $sumtotal=$sumtotal+$total;
    }
    
    
      ?>
  

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal"><?php echo"$sumtotal";?></div>
    </div>
    <div class="totals-item">
      <label>Tax (18%)</label>
      <div class="totals-value" id="cart-tax"><?php 
          $tax=0.18*$sumtotal;
          echo"$tax";?></div>
    </div>
    <div class="totals-item">
      <label>Shipping (7%)</label>
      <div class="totals-value" id="cart-shipping"><?php
            $shipping=0.07*$sumtotal;
              echo"$shipping";
          
          ?></div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total"><?php 
          $grandtotal=$sumtotal+$tax+$shipping;
          echo"$grandtotal";?></div>
    </div>
  </div>
      <div class="buttoms">
       
<?php
      echo"<a href='payment.php?amt=$grandtotal'><button class='checkout'>Checkout</button></a>";
          ?>
      <form method="post">
      <input type="submit" class="checkout" id="clearbtn" name="clear"  value="Clear Cart">
      
    </form>
     <a href='project1.php' class="backlink"> Back to Shop </a>
    </div>
    
    <?php
    if(isset($_POST['clear']))
    {
        $query="delete from cart";
        $run=mysqli_query($con,$query);
         
        echo "<script>
        
        
       function replace() {
           location.replace('/productpage/cart.php');
       }
       
       replace();
       
       </script>";
        
        unset(  $_POST['clear'] );
    }
    ?>
 
</div>
    
 <div id="footer" style="background-color:#f1f3f4"><!-- #footer Begin -->
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
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/" class="fa fa-twitter"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                    <a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=AddSession" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->



</body></html>