<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Ubuntu&display=swap" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
   ></script>
    <style>
body{
    font-family: "Montserrat", sans-serif;
	height:100vh;
	min-height:550px;
	
	background-repeat: no-repeat;
	background-size:cover;
	background-position:center;
	

}
a{
  text-decoration:none;
  color:#444444;
}
.login-reg-panel{
    position: relative;
    top: 50%;
    transform: translateY(-50%);
	text-align:center;
    width:70%;
	right:0;left:0;
    margin:auto;
    height:400px;
    /*background-color: rgba(30,30,30, 0.9);*/
    background-color: #616f39;
    opacity: 0.9;
}
.white-panel{
    background-color: #fff;
    height:500px;
    position:absolute;
    top:-50px;
    width:50%;
    right:calc(50% - 50px);
    transition:.3s ease-in-out;
    z-index:0;
    
}
.login-reg-panel input[type="radio"]{
    position:relative;
    display:none;

}
#label-register:hover, #label-login:hover
{
    background-color: #899857;
}
.login-reg-panel{
    /*color:#B8B8B8;*/
    color: #fff;
}
.login-reg-panel #label-login, 
.login-reg-panel #label-register{
    border:1px solid #9E9E9E;
    padding:0 5px;
    width:150px;
    display:block;
    text-align:center;
    border-radius:3px;
    cursor:pointer;
}
.login-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    left:0;
    position:absolute;
    text-align:left;
}
.register-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    right:0;
    position:absolute;
    text-align:left;
    
}
.right-log{right:50px !important;}

.login-show, 
.register-show{
    z-index: 1;
    display:none;
    opacity:0;
    transition:0.3s ease-in-out;
    color:black;
    background-color: white;
    text-align:left;
    padding:50px;
   
}
.register-show h2
{
      
      font-size: 1.7rem;
      letter-spacing: 2px;
}
.login-show h2
{
    font-size: 1.7rem;
      letter-spacing: 2px;
}
.show-log-panel{
    display:block;
    opacity:1;
}
.login-show input[type="email"], .login-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.login-show input[type="submit"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.login-show a{
    display:inline-block;
    padding:10px 0;
   
}
        .register-show show-log-panel{
            background-color: white;
        }
.register-show input[type="email"], .register-show input[type="password"],.register-show input[type="text"]{
    width: 100%;
    display: block;
    margin:10px 0;
    padding: 10px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.register-show input[type="submit"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.credit {
    position:absolute;
    bottom:10px;
    left:10px;
    color: #3B3B25;
    margin: 0;
    padding: 0;
    font-family: Arial,sans-serif;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    z-index: 99;
}
#msg1,#msg2
{
    color: red;
}
a{
  text-decoration:none;
  color:#eaeaea;
}
   
.bt2
{
    padding: 10px;
    margin: 10px;
    font-family: "Montserrat";
    font-size: 1rem;
}  

    
    </style>
</head>
<body style="background-image:url('b16.jpg');">
     <?php include("navbar1.php")?>
  	<div class="login-reg-panel">
		<div class="login-info-box">
            <h2 style="font-size: 1.5rem; letter-spacing: 2px;">WELCOME BACK !!</h2>
            <p style="font-size: 1.2rem; letter-spacing: 2px;">Login to Continue...</p>
			<label id="label-register" for="log-reg-show" style="padding: 10px; font-size: 1rem; font-family:Montserrat; font-weight: 500; letter-spacing: 2px; ">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked" >
		</div>
							
		<div class="register-info-box">
			<h2 style="font-size: 1.8rem; letter-spacing: 2px;">New to Leaf.Co?</h2>
            <p style="font-size: 1.2rem; letter-spacing: 2px;">Register to be a part of us.</p>
			<label id="label-login" for="log-login-show" style="padding: 10px; font-size: 1rem; font-family:Montserrat; font-weight: 500; letter-spacing: 2px; ">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show" >
		</div>
							
		<div class="white-panel">
			<div class="login-show">
                <h2>LOGIN</h2>
                <form action="" method="post">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password"><span id="msg1"></span>
                    <input type="submit" name="login" value="Login" class="btn  bt2">
                    
                </form>
                <?php

                            
                                 $db=mysqli_connect("localhost","root","","leaf");
                if(isset($_POST['login']))
                 {
                                $email =$_POST['email'];
                                $password =$_POST['password'];

                            $query = "select * from register where email='$email'";
                            $result = mysqli_query($db,$query);
                    if(mysqli_num_rows($result)==0)
                    {
                        echo"
                             <script>
                                 document.getElementById('msg1').innerHTML='User does not exist!!';
                             </script>

                             
                         ";
                    }
                    else if($email=="" || $password=="")
                    {
                        echo"
                             <script>
                                 document.getElementById('msg1').innerHTML='Kindly fill in all the fields!!';
                             </script>

                             
                         ";
                    }
                    else
                    {


                        while($deets=mysqli_fetch_array($result))
                        {
                            $passwordcheck=$deets['password'];
                            if ($password==$passwordcheck)
                             {
                                $cur_firstname=$deets['firstname'];
                                $cur_lastname=$deets['lastname'];
                                $cur_email=$deets['email'];
                                $cur_password=$deets['password'];
                                $cur_address=$deets['address'];
                                $cur_city=$deets['city'];
                                $cur_state=$deets['state'];
                                $cur_pincode=$deets['pincode'];
                                // $dlt_query = "Delete from currentuser";
                                // $dlt_result = mysqli_query($db,$dlt_query);
                                $currentuser =  "insert into currentuser(firstname,lastname,email,password,address,city,state,pincode) values('$cur_firstname','$cur_lastname','$cur_email','$cur_password','$cur_address','$cur_city','$cur_state','$cur_pincode')";
                                $insert_result = mysqli_query($db,$currentuser);
                                    echo"
                                     <script>
                                         document.getElementById('msg1').innerHTML='Loged in Successfully!!'
                                     </script>

                                     
                                 ";
                                    echo "
                                 <script>
                                     window.location.replace('index.php');
                                 </script> ";
                            }
                            else
                            {
                                    echo"
                                 <script>
                                     document.getElementById('msg1').innerHTML='Incorrect Password!! <br> Try Again!'
                                 </script> ";
                            }
                          }
                     }
                 }
                ?>
				<a href="" style="color: #fff;">Forgot password?</a>
			</div>
			<div class="register-show" style=" position: absolute; top: -70px; background-color:#fff; width: 79%; ">
				<h2>REGISTER</h2>
                <form action="" method="post">
                    <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="cpassword" placeholder="Confirm Password">
                <input type="text" name="firstname" placeholder="First Name">
                <input type="text" name="lastname" placeholder="Last Name">
                <input type="text" name="address" placeholder="Address">
                <input type="text" name="city" placeholder="City">
                <input type="text" name="state" placeholder="State">
                <input type="text" name="pincode" placeholder="Pincode">
                <input type="submit" value="Register" name="signup" class="btn bt2"><br><span id="msg2"></span>
               
                </form>
				<?php

                            
                                 $db=mysqli_connect("localhost","root","","leaf");
                            if(isset($_POST['signup']))
                            {
                                $reg_email =$_POST{'email'};
                                $reg_password =$_POST{'password'};
                                $reg_cpassword=$_POST{'cpassword'};
                                $reg_firstname=$_POST{'firstname'};
                                $reg_lastname=$_POST{'lastname'};
                                $reg_address=$_POST{'address'};
                                $reg_city=$_POST{'city'};
                                $reg_state=$_POST{'state'};
                                $reg_pincode=$_POST{'pincode'};
                                $reg_query = "select * from register where email='$reg_email'";
                                $reg_result = mysqli_query($db, $reg_query);
                                $num=mysqli_num_rows($reg_result);
                                if($num==1)
                                {
                                    echo"
                                     <script>
                                         alert('User already exists!!');
                                     </script>  
                                 ";
                                }
                                else if ($reg_password=="" || $reg_cpassword=="" || $reg_email=="" || $reg_pincode=="" || $reg_state=="" || $reg_city=="" || $reg_address=="" || $reg_lastname=="" || $reg_firstname=="") {
                                    echo"
                             <script>
                                 alert('Kindly fill in all the details!!');
                             </script>

                             
                         ";
                                }
                                else if($reg_password != $reg_cpassword)
                                {
                                    echo"
                                     <script>
                                        alert('Passwords do not match!!');
                                     </script>  
                                 ";
                                }
                                else
                                {
                                    $reg= "insert into register(firstname,lastname,email,password,address,city,state,pincode) values('$reg_firstname','$reg_lastname','$reg_email','$reg_password','$reg_address','$reg_city','$reg_state','$reg_pincode')";
                                    mysqli_query($db,$reg);
                                    echo"
                                     <script>
                                         document.getElementById('msg2').innerHTML='Registration Successful!!';
                                     </script>

                                     
                                 ";

                                }


                            }
                ?>
			</div>
		</div>
	</div>
<script>
    $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});



    
    
</script>
<br><br><br><br>
<?php include("footer.php")?>
</body>
</html>