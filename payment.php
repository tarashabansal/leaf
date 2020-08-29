<link rel="stylesheet" type="text/css" href="ship.css">


<?php include("navbar1.php");?>
<body>
<div class="wrapper" style="margin-bottom:50%">
  <div class="checkout_wrapper">
    <div class="product_info">
      <img src="lf.png" alt="product">
      <div class="content">
        <h3>TOTAL AMOUNT</h3>
        <?php
            
    include("../db.php");
    if(isset($_GET['amt'])){
        $amount=$_GET['amt'];
        echo"
        <p>₹$amount</p>
        
        ";
    }
            
            ?>
      </div>
    </div>
              <div class="checkout_form">
              
            <p>Billing Address</p>
            <div class="details">
            <form action="" method="post">
        <div class="section">
           
            <input type="text" id="fname1" name="firstname" placeholder="Name">
          </div>
         <div class="section">
            <input type="text" id="email" name="email" placeholder="user@example.com">
          </div>
            <div class="section">
          
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
          </div>
              <div class="section">
            <input type="text" id="city" name="city" placeholder="city">
            </div>
              <div class="section last_section">
                <div class="item">
                
                <input type="text" id="state" name="state" placeholder="STATE">

          </div>
          <div class="item">
              
                <input type="text" id="zip" name="zip" placeholder="ZIPCODE">
              </div>
            </div>
            <div class="tt">
                    <p>OR USE</p>
            </div>
  
  
   

          <div class="btn">

          <a href="cc.html">CREDT CARD</a>
        </div>
         <div class="btn1">
       
          <a href="upi.html">UPI</a>
        </div>
         <div class="btn3">
       
          <a href="cod.html">COD</a>
        </div>
          
                         <input type="submit" class="btn4" name="ladd"value="login address" style="color: white;">

          
          <?php
                include("../db.php");
                if(isset($_POST["ladd"])){
                    
                    $query="select * from currentuser";
                    $run=mysqli_query($con,$query);
                    while($row1=mysqli_fetch_array($run)){
                        $name = $row1['firstname'];
                        $email = $row1['email'];
                        $add = $row1['address'];
                        $city = $row1['city'];
                        $state = $row1['state'];
                        $zip = $row1['pincode'];
                        echo"
                        <script>
                            
                            document.getElementById('fname1').value='$name';
                            document.getElementById('email').value='$email';
                            document.getElementById('adr').value='$add';
                            document.getElementById('city').value='$city';
                            document.getElementById('state').value='$state';
                            document.getElementById('zip').value=$zip;

                        </script>
                        ";
                    }
                }
                ?>
                </form>
      </div>
                  
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("footer.php");?>
</body>