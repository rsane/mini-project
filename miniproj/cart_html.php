<?php include("cart.php"); 
if(isset($_SESSION['user'])){?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="cart.css?ver=<?php echo rand(111,999)?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- <script>$( document ).ready(function() {
        $('#myModal').modal('show')});</script> -->

    <!-- Modal -->
    <script>
        $('btn').click(function(){
            window.location.href='https://localhost/miniproj/logout.php';
        });
    </script>
    <?php
        if(isset($_POST['buy'])){

            //for updating reports
            while($data = mysqli_fetch_array($result_disp)){
                $query_reports = "update report_prod set qty_sold = qty_sold + (select qty from cart where prod_name = '".$data[1]."') where prod_name = '".$data[1]."'
                ";
                mysqli_query($db, $query_reports);
            }
            

            //delete the cart when user clicks buy now
            $query_del = "delete from cart where username = '".$user."'";
            mysqli_query($db, $query_del);

            echo "<script>$( document ).ready(function() {
                $('#myModal').modal('show')});</script>";
            
                header("refresh: 5; url=https://localhost/miniproj/MiniProject_html.php");
        }
    ?>
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
					<h1 class="modal-title text-center text-danger">Thank You For Shopping!!!</h1>
				</div>
				<div class="modal-body text-center text-primary">
					<h3>These products are yours now!</h3><br>
                    <p>We will ship your product to your address :)</p>
				</div>
			</div>
		</div>
	</div>
    <nav class="navbar">  
        <div class="logo"><h2>VENOM</h2></div>
        <ul>
            <li><a href="http://localhost/miniproj/MiniProject_html.php">Home</a></li>
            <li><a href="ProductOp.html">Product</a></li>
            <li><a href="sell.html">Sell Items</a></li>
            <li><a href="http://localhost/miniproj/resale_html.php">Resale Products</a></li>
            <li><a href="" class="drop" id="drop">
                <a href="https://localhost/miniproj/logout.php"><i class="fa fa-sign-out"></i></a>
            </li>
        </ul>                
    </nav>
    <div class="head">
        <h1>Your products</h1>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>Product Name</th>
                <th>Qty</th>
                <th>Product Price</th>
                <th>Price</th>
                <th> </th>
            </tr>
            <tr>
                <td> </td><td> </td><td> </td>
            </tr>
            <?php
            $grand_tot = [];
                if(mysqli_num_rows($result_disp) > 0){
                    while($data = mysqli_fetch_array($result_disp)){
                        echo "<tr>
                            <td>".$data[1]."</td>
                            <td>".$data[2]."</td>
                            <td>Rs. ".$data[3]."</td>
                            <td>Rs. ".$data[2]*$data[3]."</td>
                            <td> <a href='?del_name=".$data[1]."'><i class='fa fa-trash'></i></a> </td>
                        </tr>";
                        array_push($grand_tot, $data[2]*$data[3]);
                    }
                }
            ?>
            <tr>
                <td> </td><td> </td><td> </td>
            </tr>
            <tr>
                <th colspan="3" class="tot">Total Price: </th>
                <th class="price_tot">Rs. <?php echo array_sum($grand_tot); ?></th>
                <th class='del'> </th>
            </tr>
        </table>
    </div>
    <div class="btn">
        <form method="POST">
        <input type="submit" value="Buy Now!" name="buy">
            </form>
    </div>

</body>
</html>
<?php }
else{
    header("location: http://localhost/miniproj/login_html.php?login_err=true");
}  ?>