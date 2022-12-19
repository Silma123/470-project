<?php

$server="localhost";
$username="root";
$password="";
$database="contactforn";

$conn= mysqli_connect($server, $username , $password ,$database);

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $name = $_POST['name'];
    $phonenumber = $_POST['number'];
    $plannername = $_POST['plannername'];
    $message = $_POST['message'];
    $plan = $_POST['plan'];

    $var="INSERT INTO `contacttable`( `email`, `name`, `phonenumber`, `plannername`, `msg`, `plan`) 
    VALUES ('$email','$name','$phonenumber',' $plannername',' $message',' $plan')";
    mysqli_query($conn ,$var);
    header('location:oursevice.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan as your desire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body><nav>
    <ul>
        <li><a href="/470 project/index.php">Home</a></li>
        <li><a href ="/470 project/signup.php">Sign Up</a></li>
        <li><a href="/470 project/login.php">Login</a></li>
        <li><a href="\470 project\Package.php">Package</a></li>
        <li><a href="\470 project\review.php">Review</a></li>
        <li><a href="\470 project\feedback.php">Feedback</a></li>
        <li><a href="\470 project\contactus.php">ContactUs</a></li>
        <li><a href="\470 project\oursevice.php">Ourservices</a></li>
         </ul>
        </nav>
        
        
        <div class="container">
             <form action="/470 project/contactus.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email"class="form-control" id="email" placeholder="email address">
                        </div>
                        <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" name="name"class="form-control" id="name" placeholder="Customer name">
                    </div>
                    <div class="mb-3">
                    <label for="phonenumber" class="form-label">Phone number</label>
                    <input type="text" name="number"class="form-control" id="number" placeholder="phonenumber">
                    </div> 
                    <div class="mb-3">
                    <label for="Plannername" class="form-label">Planner Name</label>
                    <input type="text" name="plannername"class="form-control" id="plannername" 
                    placeholder="Planner name">
                    </div> 
                    <div class="mb-3">
                    <label for="Message" class="form-label">Enter your specification</label>
                    <textarea class="form-control" name="message"id="message" rows="3"></textarea>
                    </div>
                    <div class = plan>
                    <select class="form-select" name= "plan" aria-label="Default select example">
                        <option selected>Basic</option>
                        <option value="1">Premium</option>
                        <option value="2">Upgrade</option>
                        
                        </select>
                    </div>
                    
                    <button type="Submit"  name = "submit" class="btn btn-info">Signup</button>
             </form>
             </div>
            <footer>
            
   

       
           
       
           
       
  

           
        <footer>
            <p>All Rights Reserved by Silma Subah </p>
            <div class="social_icons">
                <img src="facebook.jpg">
                <img src="instagram.jpg">
                <img src="youtube.png">
                <img src="twiter.jpg">
            </div>
           
          </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>
</html>
