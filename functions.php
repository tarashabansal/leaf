<?php
$db=mysqli_connect("localhost","tarasha1","my7727894449","leaf"); 

function getPro1(){
    global $db; 
    $get_plants="select * from product";
    $display=mysqli_query($db,$get_plants);
    while($row_products=mysqli_fetch_array($display)){
        $id=$row_products['id'];
        $product_name=$row_products['product_name'];
        $price=$row_products['price'];
        $image=$row_products['image'];
        echo"

        <div class='col-md-12'>
    <div class='card'>
        <a  href='desc.php?id=$id'>  
            <img src='project%20products/$image' alt='Avatar' class='image' style='width:100%'>
            <div class='middle'>
                <div class='text'>
                    <h4><b>$product_name</b></h4>
                    <p>Rs.$price</p>
                </div>
            </div>
        </a>
    </div>

</div>

        ";
    }
}

?>
