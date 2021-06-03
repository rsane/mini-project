<?php include("products.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intel i5</title>
    <https://www.toptal.com/designers/htmlarrows/symbols></https:>
    <link rel="stylesheet" href="products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar">  
        <div class="logo"><h2>VENOM</h2></div>
        <ul>
            <li><a href="../MiniProject.html">Home</a></li>
            <li><a href="../ProductOp.html">Product</a></li>
            <li><a href="../sell.html">Sell Items</a></li>
            <li><a href="../resale.html">Resale Products</a></li>
            <li><a href="" class="drop" id="drop">
                <a href="https://localhost/miniproj/cart_html.php"><i class="fa fa-shopping-cart"></i></a> &nbsp; 
                <a href="https://localhost/miniproj/logout.php"><i class="fa fa-sign-out"></i></a>
            </li>
        </ul>                
    </nav>

    <!--                           SINGLE   Product  -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="../images/lenovo.png">
            </div>
            <div class="col-2">
                <p><a href="../MiniProject.html">Home</a> / <a href="../ProductOp.html">Products</a> / <a href="../MouseProductLine.html">Mouse</a></p>
                <h1>Lenovo Legion</h1>
                Price :- <h4>Rs 1,159</h4>
                <h3>Product Details</h3>
                <br>
                <p>Given is the summary of the product Given is the summary of the product Given is the summary of the product Given is the summary of the product Given is the summary of the product Given is the summary of the product </p>
                <br>
                <form method="post">
                    <input type="submit" class="btn" name="buy_lenovo" value="Buy Now"><br><br>
                </form>  
                <h4 class="msg" id="msg_show"><?php if(isset($_POST['buy_lenovo'])){echo "Item added to cart!";} ?></h4>                
            </div>
        </div>
    </div>


    <!--               Related Products -->

    <br>
    <div class="small-container">
        <h2 class="title">Related Products</h2>
        <div class="row">
            <!-- Product 1  -->
            <div class="col-4">
                <a href="razer.html"><img src="../images/razer.png"></a>
                <h4>Razer DeathAdder</h4>
                <p>Rs 1,599</p>
            </div>
            <!-- Product 2  -->
            <div class="col-4">
                <a href="logitech.html"><img src="../images/logitec.png"></a>
                <h4>Logitech G102</h4>
                <p>Rs 1,595</p>
            </div>
            <!-- Product 3  -->
            <div class="col-4">
                <a href="redragon.html"><img src="../images/redragon.png"></a>   
                <h4>Redragon M808</h4>
                <p>Rs 1,790</p>
            </div>
        </div>
    </div>

    <!--              Footer  -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our Apps for Android and IOS</h3>
                </div>
                <div class="footer-col-2">
                    <h3>Our Purpose id to Provide better interface to our users out there</h3>
                </div>
                <div class="footer-col-3">
                    <h3>Usefull Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Posts</li>
                        <li>Return Policy</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Instagram</li>
                        <li>Facebook</li>
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>