<?php include("MiniProject.php");
 if(isset($_SESSION['user'])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
    <link rel="icon" href="images/snek-white.svg" type="images/x-icon">
    <link rel="stylesheet" href="MP_home.css?ver=<?php echo rand(111,999)?>">
    <link rel="stylesheet" href="ProgressBar.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body id="entire-container">
        <nav class="navbar">  
            <div class="logo"><h2>VENOM</h2></div>
            <ul>
                <li><a href="https://localhost/miniproj/MiniProject_html_html.php">Home</a></li>
                <li><a href="ProductOp.html">Product</a></li>
                <li><a href="sell.html">Sell Items</a></li>
                <li><a href="https://localhost/miniproj/resale_html.php">Resale Products</a></li>
                <li><a href="" class="drop" id="drop">
                    <i class="fa fa-user-circle"></i>&nbsp;<span class="down-arrow"><i class="fa fa-sort-down fa-sm"></i></span>
                </a></li>
                     
            </ul>        
        </nav>
        <div class="downdrop-content" id="dropdown">
            <ul class="dropdown">
                <li><a href="#"><i class="fa fa-users"></i> Account</a></li>
                <li><a href="https://localhost/miniproj/cart_html.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                <li><a href="https://localhost/miniproj/logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
            </ul>
        </div>
        <!-- <button onclick="topFunction()" id="myBtn" class="topbtn" title="Go to top"><i class="fa fa-arrow-up"></i></button> -->
        <div class="cover">
            <div class="search-box">
                <i class="fa fa-search"></i><input type="text" name="search" autocomplete="off" placeholder="Search">
                <div class="result"></div>
            </div>
            <div class="greet">
                <div class="main-img">
                    <!-- <i class="fa fa-laptop fa-2x"></i> -->
                    <img src="images/snek-white.svg" alt="snk">
                </div>
                <div class="main-logo">
                    <h2>VENOM</h2>
                </div>
                <div class="main-content">
                    <div class="box1">
                        <a href="#keyboard">
                            <h2>New Zebronics Keyboard</h2>
                            <h5>Check Out <i class="fa fa-arrow-right"></i></h5>
                        </a>
                    </div>
                    <div class="box2">
                        <a href="#buildpc">
                            <h2>Custom Build Your PC</h2>
                            <h5>Check Out <i class="fa fa-arrow-right"></i></h5>
                        </a>
                    </div>
                    <div class="box3">
                        <a href="#mouse">
                            <h2>New Raze DeathAdder</h2>
                            <h5>Check Out <i class="fa fa-arrow-right"></i></h5>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="KeyboardImage" id="keyboard">
            <div class="left-disc">
                <p>Keyboards</p>
                <div class="left-text">
                    This is keyboard div and we got some awesome keyboards. Please check them out!<br>
                    To check out keyboards, go to the link below.
                </div>
                <div class="prod_link">
                    <a href="KeyboardProductLine.html">View Keyboards <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>        
        <div class="PCimage" id="buildpc">
            <div class="right-disc">
                <p>Build Your Own PC</p>
                <div class="right-text">
                    This is PC div and we got some awesome PC. Please check them out!<br>
                    To check out PCs, go to the link below.
                </div>
                <div class="prod_link">
                    <a href="http://localhost/miniproj/recommend.php">Buid PC <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>          
        <div class="MouseImage" id="mouse">
            <div class="left-disc">
                <p>MOUSE</p>
                <div class="left-text">
                    This is keyboard div and we got some awesome keyboards. Please check them out!<br>
                    To check out keyboards, go to the link below.
                </div>
                <div class="prod_link">
                    <a href="MouseProductLine.html">View Mouse <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>        
        
        <!-- <div class="GraphicCardImage"></div>        
        
        <div class="GamesImage"></div>         -->

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

        <!-- This is for the RGB Scroll Bar  -->
        <!-- To be writtent at the last  -->
        <div id="progressbar"></div>
        <div id="scrollPath"></div> 
<?php }
else{
    header("location: http://localhost/miniproj/login_html.php?login_err=true");
}  ?>
<script type="text/javascript">
    /*for scrollbar*/
    let progress=document.getElementById('progressbar');
    let totalHeight = document.body.scrollHeight - window.innerHeight;
    window.onscroll=function(){
        let progressHeight = (window.pageYOffset/totalHeight)*100;
        progress.style.height=progressHeight+"%";

    }
    
    /*for user dropdown*/
    document.getElementById('drop').onmouseover = function(){
        document.getElementById('dropdown').style.display = 'block';
    }
    document.getElementById('entire-container').onclick = function(){
        document.getElementById('dropdown').style.display = 'none';
    }

    /*for searchbar*/
    $(document).ready(function(){
        $('.search-box input[type="text"]').on("keyup input", function(){
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if(inputVal.length){
                $.get("MiniProject.php", {term: inputVal}).done(function(data){
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else{
                resultDropdown.empty();
            }
        });

        // Set search input value on click of result item
        $(document).on("click", ".result a", function(){
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });

    /*for animation*/
    $(window).scroll(function(event) { 
        /*animation for keyboard*/
        if ($(".KeyboardImage").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
            $('.left-disc').addClass('triggerAnimKeyboard');
        } 
        else {
            $('.left-disc').removeClass('triggerAnimKeyboard');
        }

        /*animation for PC*/
        if ($(".PCimage").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
            $('.right-disc').addClass('triggerAnimPC');
        } 
        else {
            $('.right-disc').removeClass('triggerAnimPC');
        }

        /*animation for mouse*/
        if ($(".MouseImage").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
            $('.left-disc').addClass('triggerAnimMouse');
        } 
        else {
            $('.left-disc').removeClass('triggerAnimMouse');
        }
    });

    // /*for scroll top button*/
    // //Get the button:
    // mybutton = document.getElementById("myBtn");

    // // When the user scrolls down 20px from the top of the document, show the button
    // window.onscroll = function() {scrollFunction()};

    // function scrollFunction() {
    //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //         mybutton.style.display = "block";
    //     } else {
    //         mybutton.style.display = "none";
    //     }
    // }

    // // When the user clicks on the button, scroll to the top of the document
    // function topFunction() {
    // document.body.scrollTop = 0; // For Safari
    // document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    // }
</script>
</body>
</html>