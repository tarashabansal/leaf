
<head>
<!--
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
       
         <link rel="stylesheet" type="text/css" href="footer1.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />
-->
  <link rel="stylesheet" type="text/css" href="donationcss.css"/>
  <title>DONATION</title>
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
 
  <link rel="stylesheet" type="text/css" href="navi.css"/>

<script>
		{

			function function1(num)
			{
				var money=num;
				//var total+=money;

				document.getElementById("re").value="Donate "+money+" now";
                document.getElementById("custom").value=money;
                function3();

			}
            
            function function3(){
                var money=document.getElementById("custom").value;
				//var total+=money;

				document.getElementById("re").value="Donate Rs."+money+" now";
			
            }
            function validate()
            {
               var  msg="";
                 var x = document.getElementById('firstName').value;
                var x1= document.getElementById('lastName').value;
                var x2 = document.getElementById('email').value;
                  
            }
//            function relocate()
//            {
//                window.location.replace("payment.php");
//            }
		}
	</script>
	<link rel="icon" href="logo_mobile.png">
	<style>
        #custom:before{
            content:"Rs."
        }
    </style>
</head>
<body style="background-image: url(bg3.jpg);">
<?php include("navbar1.php");?>

	
	<div class="leftcol" >

		<h1 style="align-content: center;">#Treeforlife</h1>
		<p>
			
#Treeforlife is an initiative by Leaf & co. in collaboration with Mission Green, where we aim to plant over 200000 trees. The cost of each sapling is Rs. 300. These saplings will be over 4 feet tall, and will be maintained for a year after they are planted.


<br>

A minimum donation of Rs. 30 (or more) from you will help us achieve this goal!
DONATE TO PLANT TREES AND SAVE THE PLANET!!<br>
                  Saving the planet is no longer an option but a requirement now!!!
              
  
		</p>
	</div>
<div class="donation-container">
            
            <div class="donation-box" style="border-radius:12px">
              <div class="title" style="letter-spacing:5px">Donation Information</div>
              
              <div class="switch" style="margin-top:-45%;margin-left:15%">
          <input type="radio" class="switch-input" name="view" value="One-Time" id="one-time" checked="">
          <label for="one-time" class="switch-label switch-label-off">One-Time</label>
          <input type="radio" class="switch-input" name="view" value="Monthly" id="monthly">
          <label for="monthly" class="switch-label switch-label-on">Monthly</label>
          <span class="switch-selection"></span>
          </div>
              <form method="post">
              
              <div class="fields" style="margin-top:15%">
                <input type="text" id="firstName" name="firstName"placeholder="First Name" required>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name"  required> 
                <input type="text" id="email" name="email" placeholder="Email"  required> 
                <input type="number" id="custom" name="custom" placeholder="Enter Amount" onblur="function3()"value="30"> 
          </div>
              
              <div class="amount" style="margin-top:15%">
                <div class="bt">
                <input type="button" name="Rs. 300"  onclick="function1('300')" value="Rs. 300" >
                <br>
                <input type="button" name="Rs. 500"  onclick="function1('500')" value="Rs. 500">
                <br>
                <input type="button" name="Rs. 1000"  onclick="function1('1000')" value="Rs. 1000"><br>
        
               </div>
              </div>
              <div class="donate-button">
                <input type="submit" name="donate" id="re" value="Donate Rs. 30 Now" >
                
              </div>
            
            </form>
            <?php
                include("../db.php");   
                if(isset($_POST['donate']))
                {
                    $fname=$_POST['firstName'];
                    $lname=$_POST['lastName'];
                    $mail=$_POST['email'];
                    $amt=$_POST['custom'];
                    $query="insert into donate values('$fname','$lname','$mail','$amt')";
                    $run=mysqli_query($con,$query);
                        echo"
                        <script>
                            window.location.replace('payment.php?amt=$amt');
                        
                        </script>
                        ";
                }
                
                
                ?>
            </div>
            
            
        </div>



</body>