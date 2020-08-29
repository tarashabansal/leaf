<?php include("functions.php")?>
<?php
$db=mysqli_connect("localhost","tarasha1","my7727894449","leaf"); 
function descrip(){
    global $db;
    
if(isset($_GET['id'])){
    $x=0;
    $product_id = $_GET['id'];
    
    
    $get_plants="select * from product where id='$product_id'";
    
    $display=mysqli_query($db,$get_plants);
    while($row_products=mysqli_fetch_array($display)){
        $product_id=$row_products['id'];
        $product_name=$row_products['product_name'];
        $price=$row_products['price'];
        $image=$row_products['image'];
        $desc=$row_products['description'];
        $category=$row_products['category'];
        $trivia=$row_products['trivia'];
        $care_ins=$row_products['care_ins'];
                echo"
     <form method='post'>
    <main class='container'>
      <div class='left-column'>
        <img src='project%20products/$image'>

      </div>


      
      <div class='right-column'>

        
        <div class='product-description'>
          <span>$category</span>
          <h1>$product_name</h1>
          
                <b>Product Details:</b>
                <br>
             
                    $desc
                   
                    <br>
                <b>Product Trivia:</b>
                <br>
                
                    $trivia
                    <br>
                   
                
                <b>Care Instructions</b>
            <br>
          
                    $care_ins
                    <br>
                   
            
        </div>

        
        

        
        <div class='product-price'>
          <span>Rs.$price</span>
          <select name='qty' class='product-price' style='width:5em; height:2em;margin-right:20px'>
            <option value='1'>Qty</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
        </select>
          <input type='submit' name='cart' value='Add to Cart' class='cart-btn'>
          
        </div>
      </div>
    </main>
</form>
     

";
        if(isset($_POST['cart'])){
            $q="SELECT * FROM currentuser";
            $result = mysqli_query($db,$q); 
            
                       if(mysqli_num_rows($result)!=0){
            $qty=$_POST['qty'];
       $query1="insert into cart values('$product_id','$product_name','$price','$image','$qty')";
    $run1=mysqli_query($db,$query1); 
           echo"<div style='float:right;margin-right:25%'>
          
           
        </div>";
            echo "
            
            <script>
        
        
       function replace() {
           location.replace('desc.php?id=$product_id');
           
          
       }
       
       replace();
       
       </script>";
            
        
        unset(  $_POST['cart'] );
            }
            else{
                echo "
            
            <script>
        alert('You are not logged in!');
        
       function replace() {
           location.replace('login.php');
           
          
       }
       
       replace();
       
       </script>";
            }
           
    }
        
       
    
   
    }
     
}
   
}



?>