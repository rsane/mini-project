<?php
    session_start();

    $user = $_SESSION['user'];

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'miniproj');

    //disp data in table
    $query_disp = "select * from cart where username = '".$user."';";
    $result_disp = mysqli_query($db, $query_disp);

    if(isset($_GET['del_name'])){
        //get url parameters for delete function
        $del_name = $_GET['del_name'];
        
        //check if qty if more than one
        $query_chk = "select qty from cart where username = '".$user."' and prod_name = '".$del_name."';";
        $chk_disp = mysqli_query($db, $query_chk);

        while($chk = mysqli_fetch_array($chk_disp)){
            if($chk[0] > '1'){
                //if qty is more than 1
                $query_decrement = "update cart set qty = qty - 1 where username = '".$user."' and prod_name = '".$del_name."';";
                mysqli_query($db, $query_decrement);
                header("Location: http://localhost/miniproj/cart_html.php");
            }
            else if($chk[0] == '1'){
                //if qty is 1
                $query_del = "delete from cart where username = '".$user."' and prod_name = '".$del_name."';";
                $del_result = mysqli_query($db, $query_del);
                header("Location: http://localhost/miniproj/cart_html.php");
            }
        }
    }

?>