<?php
   

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
    <link rel="stylesheet" href="\470 project\CSS folder\style.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="/470 project/index.php">Home</a></li>
        <li><a href ="/470 project/signup.php">Sign Up</a></li>
        <li><a href="/470 project/login.php">Login</a></li>
        <li><a href="\470 project\Package.php">Package</a></li>
        <li><a href="\470 project\review.php">Review</a></li>
        <li><a href="\470 project\feedback.php">Feedback</a></li>
        <li><a href="\470 project\contactus.php">ContactUs</a></li>
        <li><a href="\oursevice.php">Ourservices</a></li>
         </ul>
        </nav>
         <?php 
            error_reporting(0);
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
            uploadData();

            }
            function uploadData(){
            if ($_SERVER["REQUEST_METHOD"] == "POST"){

                $email = $_POST['email'];
                $phonenumber = $_POST['number'];
                $password = $_POST['password'];

                        
                
            }

                $server="localhost";
                $username="root";
                $password="";
                $database="signupform";

                $conn = mysqli_connect($server, $username , $password ,$database);

                if(!$conn){
                    echo '<div class="alert alert-primary" role="alert">
                    Connection error.
                    </div>'.mysqli_connect_error();

                }
                else{
                    $sql = "INSERT INTO `formtable` (`email`, `phonenumber`, `password`, `date`)
                     VALUES ( '$email', '$phonenumber', '$password', current_timestamp());";
                    
                    $value = mysqli_query($conn ,$sql);
                    
                    if($value){
                        echo '<div class="alert alert-primary" role="alert">
                        Successful ! Your registration has been completed.
                        </div>';

                    }
                    else{
                        echo '<div class="alert alert-primary" role="alert">
                       Error ! uploading data.</div>'.mysqli_error($conn);

                    }
                }

        }
            
         ?>
        
        <div class="container">
             <form action="/470 project/signup.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email"class="form-control" id="email" placeholder="email address">
                        </div>
                    <div class="mb-3">
                    <label for="phonenumber" class="form-label">Phone number</label>
                    <input type="text" name="number"class="form-control" id="number" placeholder="phonenumber">
                    </div> 
                    <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password"class="form-control" id="password" placeholder="password">
                    </div>
                    
                    
                    <button type="Submit" class="btn btn-success">Signup</button>
             </form>
             </div>
            <footer>
            
   

       
           
       
           
       
  

           
        <footer>
            <p>All Rights Reserved by Silma Subah </p>
            <div class="social_icons">
                <img src="\470 project\images folder\facebook.jpg">
                <img src="\470 project\images folder\instagram.jpg">
                <img src="\470 project\images folder\youtube.png">
                <img src="\470 project\images folder\twiter.jpg">
            </div>
           
          </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>
</html>
