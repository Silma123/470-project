<?php
   error_reporting(0);
   if($_SERVER["REQUEST_METHOD"]=="POST"){
        $err= false;
        include '\470 project\dbconnect.php';
        if( isset($firstname)|| isset($lastname)|| isset($email)|| isset($phonenumber)|| isset($password)){
        
        $email= $_POST["email"];
        $phonenumber= $_POST["phonenumber"];
        $password= $_POST["password"];
        $cpassword=$_POST["cpassword"];
        $exist=false;

    if($password==$cpassword && $exist==false){
            $sql="INSERT INTO `users` ( `Email`, `phonenumber`, `password`, `dt`) 
            VALUES ( '$email', '$phonenumber', '$password', current_timestamp());";
            $result = mysqli_query($conn,$sql);
            if($result){
                $err=true;
             }
          }
      }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Grooming</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><nav>
    <ul>
        <li><a href="/470 project/index.php">Home</a></li>
        <li><a href ="/470 project/signup.php">Sign Up</a></li>
        <li><a href="/470 project/login.php">Login</a></li>
        <li><a href="#Location">Package</a></li>
        <li><a href="#User">Hall Booking</a></li>
        <li><a href="#User">User</a></li>
        <li><a href="#ContactUs">ContactUs</a></li>
        <li><a href="#AboutUs">AboutUs</a></li>
         </ul>
        </nav>
         <?php 
            if($err){       
                echo  '<div class="alert alert-successs alert-dismissible fade show" role="alert" 
                style="background-color:maroon";
                <strong>Congratulation!</strong> You account has been crated.Now you can pick your favourite
                    <br> >
                    </div>';
            }
         ?>
        
<div class="collection" >
<div class ="container">
            
            <center>
            <br>
           

           
         <div class="box">  
         <form action="C:\xampp\htdocs\470 project\signup.php" method="post">
            
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label><br>
                <input type="email" class="form-control" id="exampleInputEmail1" name="Email address"aria-describedby="emailHelp">
                
            </div><br>
            <div class="mb-3">
                <label for="Password" class="form-label">Phone number</label><br>
                <input type="password" class="form-control" id="Password1" name="Phone number">
            </div><br>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label><br>
                <input type="password" class="form-control" id="Password1" name="password">
            </div><br>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label><br>
                <input type="password" class="form-control" id="cPassword" naem="cpassword">
            </div><br>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Agree to terms and conditions</label>
            </div><br>
            <button type="submit" class="btn btn-primary">SignUp</button>
           
    
        </form>
    </div>
                
            
</center> 

            </div> 
        </div>
      
        <footer>
            <p>All Rights Reserved by Silma Subah </p>
            <div class="social_icons">
                <img src="facebook.jpg">
                <img src="instagram.jpg">
                <img src="youtube.png">
                <img src="twiter.jpg">
            </div>
           
          </footer>


</body>
</html>
