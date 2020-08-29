<?php
$con=mysqli_connect("localhost","tarasha1","my7727894449","leaf");
function getp(){
    global $con;
     $result = mysqli_query($con,'SELECT SUM(quantity) AS value_sum FROM cart'); 
                    $row = mysqli_fetch_assoc($result); 
                    $sum = $row['value_sum'];
   
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
    $result = mysqli_query($con,'SELECT SUM(quantity) AS value_sum FROM cart'); 
                    $row = mysqli_fetch_assoc($result); 
                    $sum = $row['value_sum'];
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

          <div> <input type='submit' name='remove_btn_$product_id' data-prod-id='$product_id' onclick='' class='remove-product' value='Remove'></div>
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
    }
    $sumtotal=$sumtotal+$total;
    
    if($sum!=0){
    if(isset($_POST["remove_btn_$product_id"])){
   $query="delete from cart where product_id=$product_id";
    $run=mysqli_query($con,$query);
        
        echo "<script>
        
       function refresh(){
           location.reload(true);
           
       }
       
       refresh();
       
       </script>
       
       ";
    }}
}
    
      ?>
   