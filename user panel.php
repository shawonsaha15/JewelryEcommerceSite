<?php
    require("Connection.php");
    session_start();
    if(!isset($_SESSION['UserLoginId'])){
        header("location: user login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Panel</title>
        
        <style>
            body{
                margin: 0px;
            }
            div.header{
                font-family: poppins;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0px 60px;
                background-color: black;
                color: white;
            }
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>

    <body>
        <div class="header">
            <h1>WELCOME TO USER PANEL</h1>
            <form method="POST">
                <button class="btn btn-secondary btn-block" name="Logout">LOG OUT</button>  
            </form>
        </div>
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table text-center table-dark">
                      <thead>
                        <tr>
                          <th scope="col">Item Name</th>
                          <th scope="col">Price</th>
                          <th scope="col">Quantity</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                            $order_query="SELECT * FROM `user_orders` WHERE `Order_ID`=1";
                                $order_result=mysqli_query($con, $order_query);
                                while($order_fetch=mysqli_fetch_assoc($order_result)){
                                    echo"
                                        <tr>
                                            <td>$order_fetch[Item_Name]</td>
                                            <td>$order_fetch[Price]</td>
                                            <td>$order_fetch[Quantity]</td>
                                        </tr>
                                    ";
                                
                                }
                          ?>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <?php
            if(isset($_POST['Logout'])){
                session_destroy();
                /*header("location: admin login.php");*/
            }
            
            /*if(isset($_POST['Delete'])){
                    $del_query="DELETE FROM `order_manager` WHERE `Order_ID`='$_POST[$user_fetch[Order_ID]]'";
                    $del=mysqli_query($con, $query);
                    echo"Deleted success";
                }*/
        ?>
        
    </body>
</html>