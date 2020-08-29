<?php 

include("../db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
             <link rel="icon" href="logo_mobile.png">
             <script>
    function back(){
        window.location.replace("module2.php");
    }
    </script>
</head>
<body>
    

 <?php include("navbar1.php");?>      
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                    Installation Form
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Email ID </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="mail" type="email" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Approx area of wall </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="area" type="number" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <label style="margin-left:270px"> Choose 3 categories of plants that you would like on the wall.<br></label>
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label">Category1 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                         
                          
                          <select name="cat1" class="form-control"><!-- form-control Begin -->
                              
                              <option> Select a Category Product </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from category";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_category=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_category['cat_id'];
                                  $p_cat_title = $row_category['category_name'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_title'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              $get_p_cats = "select * from houseplants";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_category=mysqli_fetch_array($run_p_cats)){
                                
                                  $p_cat_title = $row_category['cat_name'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_title'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label">Category2 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="cat2" class="form-control"><!-- form-control Begin -->
                              
                              <option> Select a Category Product </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from category";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_category=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_category['cat_id'];
                                  $p_cat_title = $row_category['category_name'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_title'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              $get_p_cats = "select * from houseplants";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_category=mysqli_fetch_array($run_p_cats)){
                                
                                  $p_cat_title = $row_category['cat_name'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_title'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label">Category3 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="cat3" class="form-control"><!-- form-control Begin -->
                              
                              <option> Select a Category Product </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from category";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_category=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_category['cat_id'];
                                  $p_cat_title = $row_category['category_name'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_title'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              $get_p_cats = "select * from houseplants";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_category=mysqli_fetch_array($run_p_cats)){
                                
                                  $p_cat_title = $row_category['cat_name'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_title'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                  <label style="margin-left:270px"> Do you have a picture of what you have in mind?<br></label>
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Upload here </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="picture" type="file" class="form-control" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label">Budget Constraints (if any)</label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="budget" type="text" class="form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Special Requests (is any) </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea name="sreq" cols="19" rows="6" class="form-control"></textarea>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Address Line 1 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea name="sreq" cols="19" rows="6" class="form-control"></textarea>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Address Line 2</label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea name="sreq" cols="19" rows="6" class="form-control"></textarea>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="submit" value="Submit" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="submit" value="Back" type="submit" class="btn btn-primary form-control" onclick="back()">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
        
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> 
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>


<?php 

if(isset($_POST['submit'])){
    $mail = $_POST['mail'];

    $area = $_POST['area'];
    $cat1 = $_POST['cat1'];
    $cat2 = $_POST['cat2'];
    $cat3 = $_POST['cat3'];
    $sreq = $_POST['sreq'];
        $add1= $_POST['add1'];
    $add2 = $_POST['add2'];

    $budget = $_POST['budget'];
    $product_img1= $_FILES['picture']['name'];
//    $product_img2 = $_FILES['product_img2']['name'];
//    $product_img3 = $_FILES['product_img3']['name'];
//    
    $temp_name1 = $_FILES['picture']['tmp_name'];
//    $temp_name2 = $_FILES['product_img2']['tmp_name'];
//    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"project products/$product_img1");
    /*move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");*/
    
    $insert_product = "insert into installation values(null,'$mail','$area','$cat1','$cat2','$cat3','$product_img1','$budegt','$sreq','$add1'.'$add2'
    )";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Your record has been submitted! We will get back to you shortly')</script>";
        
        echo "<script>window.location.replace('module2.php')</script>";
        
    }
    else{
        echo"error";
    }
    
}

?>