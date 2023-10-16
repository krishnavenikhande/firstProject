<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="insertcart.php" method="post">             
                    <div class="card">
                        <img src="p11.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Watch</h5>
                            <p class="card-text"></p>
                            <button type="submit" name="addto_cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="name" value="watch">
                        </div>
                        </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="insertcart.php" method="post">             
                    <div class="card">
                        <img src="bottle.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bottle</h5>
                            <p class="card-text"></p>
                            <button type="submit" name="addto_cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="name" value="bottle1">
                        </div>
                        </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="insertcart.php" method="post">             
                    <div class="card">
                        <img src="b1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bottle</h5>
                            <p class="card-text"></p>
                            <button type="submit" name="addto_cart" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="name" value="bottle2">
                        </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
    
    
    


