<?php 
    // initializing variables
    $errors = array(); 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'miniproj');

    // REGISTER USER
    if (isset($_POST['for_user'])) {
        
        // receive all input values from the form
        $user_input = mysqli_real_escape_string($db, $_POST['change']);

        //checking if user_input is username
        if(preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $user_input)){

            //checking if user exists
            $chk_user = "select * from customers where username='".$user_input."';";
            $result_user = mysqli_query($db, $chk_user);
            if(mysqli_num_rows($result_user)>0){
                $row = mysqli_fetch_array($result_user);
                array_push($errors, "Password: ".$row['password']); 
            }
            else{
                array_push($errors, "Username doesn't exists.");
            }
        }
        else if(filter_var($user_input, FILTER_VALIDATE_EMAIL)) {
            
            //checking if email exists
            $chk_user = "select * from customers where email='".$user_input."';";
            $result_user = mysqli_query($db, $chk_user);
            if(mysqli_num_rows($result_user)>0){
                $row = mysqli_fetch_array($result_user);
                array_push($errors, "Username: ".$row['username']);
                array_push($errors, "Password: ".$row['password']); 
            }
            else{
                array_push($errors, "Email doesn't exists.");
            }
        }
    }

?>