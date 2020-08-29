<?php
$db=mysqli_connect("localhost","tarasha1","my7727894449","leaf"); 

function getPro(){
    global $db; 
    
    $get_cat="select * from category ";
    $display=mysqli_query($db,$get_cat);
    while($row_products=mysqli_fetch_array($display)){
        $id=$row_products['cat_id'];
        $category_name=$row_products['category_name'];
        $image=$row_products['image'];
        
    }
}

?>
