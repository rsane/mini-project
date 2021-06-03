<?php
    session_start();

    
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'miniproj');

    $user = $_SESSION['user'];

    if(isset($_POST['buy_ballistix'])){
        $product_name = "Ballistix Crucial 8GB";
        $product_price = "4315";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_corsair'])){
        $product_name = "Corsair Vengence 8GB";
        $product_price = "4500";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_cosmic'])){
        $product_name = "Cosmic Byte Keyboard";
        $product_price = "1284";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_gskills'])){
        $product_name = "G.Skills Ripjaws 8GB";
        $product_price = "4399";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_hpkey'])){
        $product_name = "HP GK100";
        $product_price = "1780";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_hyperx'])){
        $product_name = "HyperX Fury 8GB";
        $product_price = "4487";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_lenovo'])){
        $product_name = "Lenovo Legion";
        $product_price = "1159";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_logitech'])){
        $product_name = "Logitech G102";
        $product_price = "1595";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_msi1080'])){
        $product_name = "MSI GTX 1080";
        $product_price = "67800";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_msi3060'])){
        $product_name = "MSI RTX 3060";
        $product_price = "69999";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_nvidia1080'])){
        $product_name = "Nvidia 1080Ti";
        $product_price = "62600";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else  if(isset($_POST['buy_nvidia1650'])){
        $product_name = "Nvidia 1650";
        $product_price = "28999";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_razer'])){
        $product_name = "Razer DeathAdder";
        $product_price = "1599";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_redgear'])){
        $product_name = "readgear";
        $product_price = "1143";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_redragon'])){
        $product_name = "Redragon M808";
        $product_price = "1790";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_ryzen5'])){
        $product_name = "AMD Ryzen 5";
        $product_price = "12900";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_ryzen7'])){
        $product_name = "AMD Ryzen 7";
        $product_price = "15500";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_zebronics'])){
        $product_name = "Zebronics";
        $product_price = "1500";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_i7'])){
        $product_name = "Intel i7";
        $product_price = "25000";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }
    else if(isset($_POST['buy_i5'])){
        $product_name = "Intel i5";
        $product_price = "16000";

        //checking if same product is added twice
        $query_search = "select * from cart where username = '".$user."' and prod_name = '".$product_name."';";
        $result = mysqli_query($db, $query_search);

        if($row=mysqli_fetch_assoc($result) > 1){
            //increment qty if product is added more than once in cart
            $query_update = "update cart set qty = qty+1 where username = '".$user."' and prod_name = '".$product_name."';";
            mysqli_query($db, $query_update);
        }
        else{
            //if there is no product then add
            $query_add = "insert into cart values ('".$user."', '".$product_name."', '1', '".$product_price."');";
            mysqli_query($db, $query_add);
        }
    }

?>