<?php 

session_start();

// initializing variables
    $errors = array(); 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'miniproj');

    // login user
    if (isset($_POST['log_user'])) {

        // receive all input values from the form
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //check if admin
        if($username == "Admin_123" && $password == "Admin@123"){
            header("Location: http://localhost/miniproj/report2.php");
        }
        else{

            //writing the queries
            $sql = "select username, password from customers where username='".$username."' and password='".$password."';";

            //executing the queries
            $result = mysqli_query($db, $sql);

            $row=mysqli_fetch_assoc($result);
            
            if(!$row) { 
                //if login info is incorrect, show error
                array_push($errors, "Incorrect Username or Password");
            } 
            else {  
                $_SESSION['user'] = $username;
                //if login info matches, then take them to homepage
                header("Location: http://localhost/miniproj/MiniProject_html.php");
            }

            //closing mysql connection
            mysqli_close($db);
        }

    }

    //register user
    if(isset($_POST['reg_user'])){
            
        // receive all input values from the form
        $regusername = $_POST['reg_username'];
        $email = $_POST['reg_email'];
        $password = $_POST['reg_password'];
        // form validation: ensure that the form is correctly filled ...
        //array_push() to add errors into the array of errors

        //check for existing username
        $chk_user = "select * from customers where username='".$regusername."';";
        $chk_result = mysqli_query($db, $chk_user);

        if(mysqli_num_rows($chk_result)>0){
            array_push($errors, "Username is already taken");
        }

        //check if username is valid
        if(!preg_match('/^[a-z\d_]{5,15}$/i', $regusername)){
            array_push($errors, "Invalid Username");
        }

        //check if email is valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Invalid Email");
        }

        //check if password is valid
        if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=!\?]{8,20}$/", $password)){
            array_push($errors, "Invalid Password");
        }

        //enter record in db if there are no errors
        if(count($errors)<=0){
            //writing mysql query to insert records
            $query = "insert into customers values('".$regusername."','".$email."','".$password."');";
            mysqli_query($db, $query);
            //creating a session
            $_SESSION['user'] = $username;
            //heading to homepage
            header("Location: localhost/MiniProject_html.php");
        }
    }

    //for handling unauthorised access
    if(isset($_GET['login_err'])){
        array_push($errors, "Please login first!");
        header("Refresh: 3; url=http://localhost/miniproj/login_html.php");
    }

?>