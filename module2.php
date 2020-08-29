<!DOCTYPE html>
<html>
    <head>
        <title>Vertical gardens</title>
        <link rel="stylesheet" href="module2.css">
       <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <link rel="icon" href="logo_mobile.png">
        <script>
            function forminsert(){
                window.location.replace("install.php");
                
            }
            function idcheck(){
                document.getElementById("hiddeninp").style.display="inline";
                document.getElementById("maint").style.display="inline";
                document.getElementById("inter").style.display="none";
                document.getElementById("mainta").style.display="none";
                document.getElementById("back").style.display="block";

            }
            function back()
            {
                 document.getElementById("hiddeninp").style.display="none";
                document.getElementById("maint").style.display="none";
                document.getElementById("inter").style.display="inline";
                document.getElementById("mainta").style.display="inline";
                document.getElementById("back").style.display="none";

            }
        </script>
    </head>
    <body>
       <?php include("navbar1.php")?>
        <div class="plain_wall">
            <h1>Boring and ugly walls?</h1>
            <div class="link">
                <p>bring life to it</p>
                <a href="#middle">V</a>
            </div>
        </div>
        <div id="middle">
            <a href="middle"></a>
            <div class="left">
                <video  width="900"src="timelapse.mp4" muted autoplay loop playsinline></video>
            </div>
            <div class="right" >
                <p style="margin-top:20px">
                    Spaces need to be made more green and beautiful in general, whether small residential gardens, commercial or city spaces. Getting green with ease and value for money together and transforming our concrete outdoor spaces into Live Green Lifestyle Gardens is what we are known for.
                    
                </p>
            </div>
        </div>
        <table style="width:100%;">
            <tr>
                <td rowspan="2" style="width:33%">
                    <img src="pictures/new2.jpg" alt="" width="495px" height="695px">
                </td>
                <td  style="width:33%; ">
                    <img src="pictures/new3.jpg" alt="" width="495px" height="345px">
                </td>
                <td style="width:33%">
                    <img src="pictures/pic3.jpg" alt="" height="345px">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <img src="pictures/new4.jpg" alt="" height="345px" width="985px">
                </td>
            </tr>
        </table>
        <center>
        <button class="interested" id="inter" onclick="forminsert()">Interested? Click Here</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="interested" onclick="idcheck()" id="mainta">Need maintainance? Click Here</button><br><br><br>
        <form method="post">
        <input type="email" placeholder="Registered Email ID" name='mail'class='hideinp' id="hiddeninp">
        <input type="submit" class="interested" name="maintain" id="maint">
        </form>
        <?php
            include("../db.php");
            if(isset($_POST['maintain'])){
                $mailid=$_POST['mail'];
                $query="select * from installation where mail='$mailid'";
                $run=mysqli_query($con,$query);
                if(mysqli_num_rows($run)==0)
                {
                    echo"<script>alert('This email is not registered');
                     </script>";
                }
                else
                {
                    echo"<script>alert('We have submitted your request!We will get back to you shortly');
                     </script>";
                }
                    
            }
            
            ?>
        <button class="interested" onclick="back()" id="back">BACK</button><br><br><br>

        </center>
   <?php include("footer.php");?>
    </body>
</html>