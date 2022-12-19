<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plan as you desire</title>
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
            <li><a href="\470 project\oursevice.php">Ourservices</a></li>
             </ul>
            </nav>
            <?php
                error_reporting(0);
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                uploadData();

                }
                function uploadData(){
                if ($_SERVER["REQUEST_METHOD"] == "POST"){

                    $name = $_POST['name'];
                    $feedback = $_POST['feedback'];
                            
                    
                }

                    $server="localhost";
                    $username="root";
                    $password="";
                    $database="feedback";

                    $conn = mysqli_connect($server, $username , $password ,$database);

                    if(!$conn){
                        echo '<div class="alert alert-primary" role="alert">
                        Successful ! your feedback has been submitted.
                        </div>'.mysqli_connect_error();

                    }
                    else{
                        $sql = "INSERT INTO `feedbacktable` ( `name`, `feedback`, `date`) 
                        VALUES ( '$name', '$feedback', current_timestamp())";
                        
                        $value = mysqli_query($conn ,$sql);
                        
                        if($value){
                            echo '<div class="alert alert-primary" role="alert">
                            Successful ! your feedback has been submitted.
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
             <form action="/470 project/feedback.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name of planner</label>
                    <input type="text" name="name"class="form-control" id="name" placeholder="name">
                    </div>
                    <div class="mb-3">
                    <label for="feedback" class="form-label">Enter your feedback</label>
                    <textarea class="form-control" name="feedback"id="feedback" rows="3"></textarea>
                    </div>
                    <button type="Submit" class="btn btn-primary">Submit</button>
             </form>
             </div>
            <footer>
            <p>All Rights Reserved by Silma Subah </p>
            <div class="social_icons">
                <img src="\470 project\images folder\facebook.jpg">
                <img src="470 project\images folder\instagram.jpg">
                <img src="\470 project\images folder\youtube.png">
                <img src="\470 project\images folder\twiter.jpg">
            </div>
           
          </footer>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
     crossorigin="anonymous"></script>
  </body>
</html>