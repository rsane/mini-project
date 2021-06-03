<?php //if(isset($_SESSION['user'])){ ?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resale Products</title>
    <link rel="stylesheet" href="ResaleProductLine.css?ver=<?php echo rand(111,999)?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="disp">
    <nav class="navbar">  
        <div class="logo"><h2>VENOM</h2></div>
        <ul>
            <li><a href="https://localhost/miniproj/MiniProject_html.php">Home</a></li>
            <li><a href="ProductOp.html">Product</a></li>
            <li><a href="sell.html">Sell Items</a></li>
            <li><a href="https://localhost/miniproj/resale_html.php">Resale Products</a></li>
            <li><a href="" class="drop" id="drop">
                <a href="https://localhost/miniproj/cart_html.php"><i class="fa fa-shopping-cart"></i></a> &nbsp; 
                <a href="https://localhost/miniproj/logout.php"><i class="fa fa-sign-out"></i></a>
            </li>
        </ul>                
    </nav>
    
    <?php
        header('Access-Control-Allow-Origin: *');

        session_start();

        $hostname     = "localhost";
        $username     = "root";
        $password     = "";
        $databasename = "miniproj";
        // Create connection
        $db = mysqli_connect($hostname, $username, $password,$databasename);

        //get session variable
        $user = $_SESSION['user'];

        // fetch query
        function fetch_data(){
            global $db;
            //writing the query
            $query = "select * from sell_prod;";

            $exec=mysqli_query($db, $query);
            //retrieiving rows from the output
            if(mysqli_num_rows($exec)>0){
                $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
            return $row;  
                
            }else{
                return $row=[];
            }
        }
        $fetchData= fetch_data();
        show_data($fetchData);
        function show_data($fetchData){

            if(count($fetchData)>0){
                foreach($fetchData as $data){ 
                    //print every container class with database values
                    echo " <div class='container'>
                    <div class='card'>
                        <div class='imgBox'>
                            <img src='http://127.0.0.1:8887/".$data['prod_img']."'>
                        </div>
                        <div class='contentBx'>
                            <h2>".$data['prod_name']."</h2>
                            <div class='price'>
                                <h3>Price: </h3>
                                <span>".$data['prod_price']."</span>
                            </div>
                            <a href='?prodname=".$data['prod_name']."&prodprice=".$data['prod_price']."'>Buy Now</a>
                        </div>
                    </div>
                    </div>";
                }
            }
        }
        
        /*inputing the resale product in cart*/
        if(isset($_GET['prodname']) && isset($_GET['prodprice'])){
            $resale_prod_name = $_GET['prodname'];
            $resale_prod_price = $_GET['prodprice'];

            //add product in cart
            $query_add = "insert into cart values ('".$user."', '".$resale_prod_name."', '1', '".$resale_prod_price."');";
            mysqli_query($db, $query_add);

            //delete the resale product
            $query_del = "delete from sell_prod where prod_name = '".$resale_prod_name."' and prod_price = '".$resale_prod_price."';";
            mysqli_query($db, $query_del);

            header("Location: http://localhost/miniproj/cart_html.php");
        }
    ?>
</body>

</html>
<?php //}
//else{
    //header("location: http://localhost/miniproj/login_html.php?login_err=true");
//}  ?>