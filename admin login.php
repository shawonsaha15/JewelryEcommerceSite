<?php
    require("connection.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login</title>
        
        <style>
            h1{
                text-align: center;
                font-family: poppins;
            }
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><h2>Jewelry</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="admin%20login.php">Admin Login</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="user%20login.php">User Login</a>
                </li>
                </ul>
              </div>
            </div>
        </nav>
        
        <div class="login-form" align="center">
            <br>
            
            <h2>ADMIN LOGIN PANEL</h2>
            
            <br>
            
            <form method="POST">
                <div class="input-field">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Admin Name" name="AdminName">
                </div>
            
                <br>
                
                <div class="input-field">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Password" name="AdminPassword">
                </div>
                
                <br>
                
                <button type="submit" class="btn btn-success" name="Signin">Sign In</button>
                
                <div class="extra">
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
        </div>
        
        <?php
            
            if(isset($_POST['Signin'])){
                $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
                $result=mysqli_query($con, $query);
                if(mysqli_num_rows($result)==1){
                    session_start();
                    $_SESSION['AdminLoginId']=$_POST['AdminName'];
                    header("location: admin panel.php");
                }
                else{
                    echo"
                    <script>
                        alert('Incorrect credentials');
                    </script>";
                }
            }
        ?>
        
    </body>
</html>