
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
        <li><a href="\470 project\review.phps">Review</a></li>
        <li><a href="\470 project\feedback.php">Feedback</a></li>
        <li><a href="\470 project\contactus.php">ContactUs</a></li>
        <li><a href="\470 project\oursevice.php">Ourservices</a></li>
         </ul>
        </nav>
        <?php
                    
                    include("dbconnect.php");
                    if(isset($_POST['submit'])){

                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        $query="SELECT * FROM FORMTABLE  WHERE email = '$email' &&  password ='$password' ";
                        $data = mysqli_query($conn, $query);
                        $total = mysqli_num_rows($data);

                        if($total == 1){
                             
                            header('location: contactus.php');
                        }
                        else{
                             echo '<div class="alert alert-danger" role="alert">
                            LOGIN FAILED
                           </div>';
                        }

                    }

                
                
        ?>
        <div class="container">
             <form action="/470 project/login.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email"class="form-control" id="email" placeholder="email address">
                   
                    <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password"class="form-control" id="password" placeholder="password">
                    </div>
                    
                    
                    <button type="Submit" name="submit" class="btn btn-dark">login</button>
             </form>
             </div>
         
        

      






       
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>


</body>
</html>
