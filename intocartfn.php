<?php include("newfn.php");

$db=mysqli_connect("localhost","tarasha1","my7727894449","leaf"); 
function intocart(){
    global $db;
    if(isset($_GET['id'])){

    
        $id=$_GET['id'];
        
        $name=$_GET['product_name'];
        
        $price=$_GET['price'];
        
        $image=$_GET['image'];
    
        $query1="insert into cart values('$id','$name','$price','$image','$qty')";
    $run1=mysqli_query($db,$query1);
    if($run1===TRUE)
        echo"success!";
    else
        echo"error";  
    
        
       
    
   
    }
     
}
   





?>