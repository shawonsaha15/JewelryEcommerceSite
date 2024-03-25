<?php 
include("header.php"); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
    <br>
   <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                <div class="card">
                  <img src="products/1.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Diamond Ring</h5>
                    <p class="card-text">Price: Tk. 2,999</p>
                    <button type="submit" name="Add_to_Cart" class="btn btn-info">Add to Cart</a>
                    <input type="hidden" name="Item_Name" value="Diamond Ring">
                    <input type="hidden" name="Price" value="2999">
                  </div>
                </div>
                </form>
            </div> 
            
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                <div class="card">
                  <img src="products/2.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Crystal Ring</h5>
                    <p class="card-text">Price: Tk. 2,999</p>
                    <button type="submit" name="Add_to_Cart" class="btn btn-info">Add to Cart</a>
                    <input type="hidden" name="Item_Name" value="Crystal Ring">
                    <input type="hidden" name="Price" value="2999">
                  </div>
                </div>
                </form>
            </div>
            
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                <div class="card">
                  <img src="products/6.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Party Set 1</h5>
                    <p class="card-text">Price: Tk. 4,999</p>
                    <button type="submit" name="Add_to_Cart" class="btn btn-info">Add to Cart</a>
                    <input type="hidden" name="Item_Name" value="Party Set 1">
                    <input type="hidden" name="Price" value="4999">
                  </div>
                </div>
                </form>
            </div> 
            
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                <div class="card">
                  <img src="products/4.jpg" class="card-img-top">
                  <div class="card-body text-center">
                    <h5 class="card-title">Party Set 2</h5>
                    <p class="card-text">Price: Tk. 5,999</p>
                    <button type="submit" name="Add_to_Cart" class="btn btn-info">Add to Cart</a>
                    <input type="hidden" name="Item_Name" value="Party Set">
                    <input type="hidden" name="Price" value="5999">
                  </div>
                </div>
                </form>
            </div>
            
       </div>
    </div>
</body>
</html> 