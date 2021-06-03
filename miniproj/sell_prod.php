<?php 
    header('Access-Control-Allow-Origin: *');
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'miniproj');

    //inputting all the values
    $username = "trial123";
    $prod_name = $_POST['name'];
    $prod_price = $_POST['price'];
    $prod_img = $_POST['img'];

    //writing the query to input to database
    $query = "insert into sell_prod values('".$username."','".$prod_name."','".$prod_price."','".$prod_img."');";
    
    //executing query
    mysqli_query($db, $query);
    
    //closing the databse connection
    mysqli_close($db);
?>