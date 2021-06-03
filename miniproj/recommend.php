<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="productLine3.css"> -->

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: linear-gradient(-135deg, #000000, #dadbe2);
            min-height: 100vh
        } 
        /* =================================================================================== */
                /*                       NavBar                      */
        /* ================================================================================== */

        .navbar{
            background-color: rgb(5, 17, 17);
            /* border-radius: 70px; */
            display: flex;
            justify-content: space-around;
            align-items: center;
            min-height: 8vh;
            color: azure; 
        }

        .navbar ul{
            display: flex;
            justify-content: space-around;
            width: 78%;  /* change space between every word */
        }
        .navbar li{    
            list-style: none;
            margin: 2px 10px;    
        }
        .lined{
            width: 19%;
            cursor: pointer;    
        }
        .lined div{
            width: 25px;
            height: 3px;
            background-color: aliceblue;
            margin: 5px;
            /* width: 0%; */
            
        }
            
        .navbar li a{
            
            text-decoration: none;
            color: #a8e5e8;
            letter-spacing: 3px; /* Change space between letters of the font in NAVBAR li */
            
            font-size: 18px; /* change the size of the font in NAVBAR li*/
            
        }
        .logo{
            color: cornsilk;
            text-transform: uppercase;
            letter-spacing: 16px;   
            width: 32%; 
            cursor: pointer;
            padding-left: 19ch;
        }


        /* ================================================================================== */
                /*                      Products Line Up               */
        /* ================================================================================== */

        form{
            text-align: center;
            margin-top: 12vh;
        }
        .input1{
            color: #4158d0;
            width: 30%;
            border: 0;
            border-bottom: 2px solid black;
            outline: 0;
            font-size: 1.3rem;
            color: white;
            padding: 7px 0;
            background: transparent;
            transition: border-color 0.2s;  
            text-align: center;
            font-weight:bold;
        }

        ::placeholder{
            color: darkgrey;
        }

        .input2{
            color: brown;
            border-radius: 5px;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            transition: 0.5s;
        }

        .input2:hover{
            background-color: black;
            border-radius: 9px;
            padding: 18px 36px;
            color: white;
        }


        /* ------------------------------------------------------------------------------------------------------- */

        




            /* ------------------------------------------------------------------------------------------------------- */




            /* ========================================================================================================= */
        .parent{
            display: flex;
            justify-content: center; 
            align-items: center;
            min-height: 50vh;
            
        }

        .container{
            position: relative;
            padding: 25px;  /* Space Between every Container or Card */
            
        }

        .container .card{
            position: relative;
            width: 250px;
            height: 370px;
            background-color: rgb(75, 75, 74);
            border-radius: 20px;
            overflow: hidden;
        }
        .container .card:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #9bdc28;
            clip-path: circle(150px at 80% 20%);
            transition: 0.5s ease-in-out;
        }
        .container .card:hover:before{
            clip-path: circle(300px at 80% -20%);

        }
        .container .card .imgBox{
            position: absolute;
            top: 40%;
            transform: translateY(-30%);
            z-index: 10000;
            width: 100%;
            height: 307px;
            transition: 0.5s;
        }

        .container .card:hover .imgBox{
            top: -10%;
            transform: translateY(0%);
        }

        .container .card .imgBox img{
            max-width: 100%;
            
            object-fit: cover;

        }
        .container .card .contentBx{
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            text-align: center;
            transition: 1s;
            z-index: 10;
        }
        .container .card:hover .contentBx
        {
            height: 210px;
        }
        .container .card .contentBx h2{
            position: relative;
            font-weight: 600;
            letter-spacing: 1px;
            color: #fff;
        }

        .container .card .contentBx .price{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px 20px;
            transition: 0.5s;
        }
        .container .card .contentBx .price h3{
            color: #fff;
            font-weight: 300;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-right: 10px;
        }
        .container .card .contentBx .price span{
            width: 105px;
            height: 34px;
            text-align: center;
            line-height: 30px;
            font-size: 29px;
            display: inline-block;
            color: #111;
            background: cornsilk;
            margin: 0 18px;
            transition: 0.5px;
            color: #111;
            border-radius: 11px;
        }
        .container .card:hover .contentBx .price{
            opacity: 0;
            visibility: visible;
            transition-delay: 0.5s;
        }
        .container .card .contentBx a{
            display: inline-block;
            padding: 10px 20px;
            background: #fff;
            border-radius: 4px;
            margin-top: 51px;
            text-decoration: none;
            font-weight: 600;
            color: #111;
            opacity: 0;
            transform: translate(50px);
            transition: 0.5s;
        }
        .container .card:hover .contentBx a{
            opacity: 1;
            transform: translate(0px);
            transition-delay: 0.25s;
            
        }
        .container .card .contentBx a:hover{
            background-color: #9bdc28;
        }
        .head{
            font-size: 88px;
            justify-content: center; 
            align-items: center;
            color: red;

        }
    </style>

</head>
<body>
<!-- http://localhost/phpmyadmin/sql.php?db=practice&table=practice1&sql_query=SELECT+%2A+FROM+%60practice1%60++%0AORDER+BY+%60practice1%60.%60Type%60+ASC&sql_signature=66b311fc4b23b6dd154db60dbef69deba542012a4d0bbe123749274dc5a1ecb3&session_max_rows=25&is_browse_distinct=0 -->
<nav class="navbar">  
    <div class="logo"><h2>VENOM</h2></div>
    <ul>
                <li><a href="http://localhost/miniprojMiniProject_html.php">Home</a></li>
                <li><a href="ProductOp.html">Product</a></li>
                <li><a href="sell.html">Sell Items</a></li>
                <li><a href="http://localhost/miniproj/resale_html.php">Resale Products</a></li>
                
    </ul>                
</nav> 

    <form method="post">
        <b><p style="font-size: 28px;">Enter your Budget</p></b> <br><br>
        <input type="text" class="input1" placeholder="For Eg; 30000" name="budget">
        <br><br><br>
        <input type="submit" class="input2" name="submit1" >
        
    <!-- -----------------------------------------------------------------------------------------------     -->

        

    <!-- -----------------------------------------------------------------------------------------------     -->
    </form>

<?php

        $con=mysqli_connect("localhost","root","","miniproj");
        if(isset($_POST['submit1'])){
            if ($_POST['budget']<57999){

                echo "<script>alert('Minimum Budget should be more than Rs 57,999');</script>";

            }else{

                
            $x=$_POST['budget'];
            // echo "<br><br>";
            // echo "Total Budget :- ".$x."<br><br>";                              
            $CPU=$x*2.5/10; 
            // echo "<br><br>".$CPU."<br><br>";          
            $GPU=$x*5/10;
            // echo "<br><br>GPU :- ".$GPU."<br><br>";
            $mouse=2000;
            // echo "<br><br>".$mouse."<br><br>";
            $keyboard=$x*1/10;
            // echo "<br><br>".$keyboard."<br><br>";
            $ram=$x*1.5/10;  
            // echo "<br><br>".$ram."<br><br>";  

            

            $sql="SELECT * FROM products";
            $result1=mysqli_query($con,$sql);  

            $CPU_Array =[];
            $GPU_Array =[];
            $mouse_Array =[];
            $keyboard_Array =[];
            $ram_Array =[];

            $CPU_Array1 =[];
            $GPU_Array1 =[];
            $mouse_Array1 =[];
            $keyboard_Array1 =[];
            $ram_Array1 =[];
            
            while ($row=mysqli_fetch_row($result1)){
                if($row[2]=="keyboard"){

                    if($row[1]<$keyboard){

                        // echo "Available Keyboard :- ".$row[0]."<br><br>";

                        array_push($keyboard_Array,$row[1]); 
                                            
                    }
                }
                elseif($row[2]=="ram"){
                    if($row[1]<$ram+$keyboard-max($keyboard_Array)){
                        

                        // echo "Available RAM :- ".$row[0]."<br><br>";

                        array_push($ram_Array,$row[1]);                     
                    }
                }
                elseif($row[2]=="CPU"){
                    if($row[1]<$CPU+$ram-max($ram_Array)){

                        // echo "Available CPU :- ".$row[0]."<br><br>";

                        array_push($CPU_Array,$row[1]);                     
                    }
                }
                elseif($row[2]=="GPU"){
                    if($row[1]<$GPU){

                        // echo "Available GPU :- ".$row[0]."<br><br>";

                        array_push($GPU_Array,$row[1]);                     
                    }
                }
                elseif($row[2]=="mouse"){
                    // This will take the left over money from cpu and add to buy GPU 
                    if($row[1]<$mouse){

                        // echo "Available MOUSE :- ".$row[0]."<br><br>";

                        array_push($mouse_Array,$row[1]);                     
                    }
                } 
            }     
            
            $keyboard_max=max($keyboard_Array);
            $ram_max=max($ram_Array);
            $CPU_max=max($CPU_Array);
            $GPU_max=max($GPU_Array);
            $mouse_max=max($mouse_Array);
            


    // ======================================================================================
                //        Combo 
    // ======================================================================================

            echo "<span class='head'><center>COMBO</center></span>";
            $con1=mysqli_connect("localhost","root","","miniproj");
            $sql1="SELECT * FROM products";
            $result2=mysqli_query($con1,$sql1);  
            
            while ($row=mysqli_fetch_row($result2)){
                if($row[2]=="keyboard"){
                    if($row[1]==$keyboard_max){
                        // echo $row[1]; 
                        ?>  
                        <div class="parent">
                            <div class="container">
                                <div class="card">
                                    <div class="imgBox">
                                        <img src='http://127.0.0.1:8887/<?php echo $row[4] ?>'> 
                                        
                                    </div>
                                    <div class="contentBx">
                                        <h2><?php echo $row[0] ; ?></h2>
                                        <div class="price">
                                            <h3>Price: </h3>
                                            <span><?php echo $row[1] ; ?></span>
                                        </div>
                                        <a href=<?php echo $row[5]; ?>>Buy Now</a> 
                                    </div>
                                </div>
                            </div>
                        

                    <?php }
                }
                else if($row[2]=="ram"){
                    if($row[1]==$ram_max){
                        // echo $row[1];
                        ?>
                        
                            <div class="container">
                                <div class="card">
                                    <div class="imgBox">
                                        <img src='http://127.0.0.1:8887/<?php echo $row[4] ?>'> 
                                        
                                    </div>
                                    <div class="contentBx">
                                        <h2><?php echo $row[0] ; ?></h2>
                                        <div class="price">
                                            <h3>Price: </h3>
                                            <span><?php echo $row[1] ; ?></span>
                                        </div>
                                        <a href=<?php echo $row[5]; ?>>Buy Now</a> 
                                    </div>
                                </div>
                            </div>
                         

                    <?php }
                }
                else if($row[2]=="CPU"){
                    if($row[1]==$CPU_max){
                        // echo $row[1];
                        ?>
                        
                            <div class="container">
                                <div class="card">
                                    <div class="imgBox">
                                        <img src='http://127.0.0.1:8887/<?php echo $row[4]; ?>'> 
                                        
                                    </div>
                                    <div class="contentBx">
                                        <h2><?php echo $row[0] ; ?></h2>
                                        <div class="price">
                                            <h3>Price: </h3>
                                            <span><?php echo $row[1] ; ?></span>
                                        </div>
                                        <a href=<?php echo $row[5]; ?>>Buy Now</a> 
                                    </div>
                                </div>
                            </div>
                         

                    <?php }
                }
                else if($row[2]=="GPU"){
                    if($row[1]==$GPU_max){
                        // echo $row[1];
                        ?>
                        
                            <div class="container">
                                <div class="card">
                                    <div class="imgBox">
                                        <img src='http://127.0.0.1:8887/<?php echo $row[4] ?>'> 
                                        
                                    </div>
                                    <div class="contentBx">
                                        <h2><?php echo $row[0] ; ?></h2>
                                        <div class="price">
                                            <h3>Price: </h3>
                                            <span><?php echo $row[1] ; ?></span>
                                        </div>
                                        <a href=<?php echo $row[5]; ?>>Buy Now</a> 
                                    </div>
                                </div>
                            </div>
                         

                    <?php }
                }
                else if($row[2]=="mouse"){
                    if($row[1]==$mouse_max){
                        // echo $row[1];
                        ?>
                        
                            <div class="container">
                                <div class="card">
                                    <div class="imgBox">
                                        <img src='http://127.0.0.1:8887/<?php echo $row[4] ?>'> 
                                        
                                    </div>
                                    <div class="contentBx">
                                        <h2><?php echo $row[0] ; ?></h2>
                                        <div class="price">
                                            <h3>Price: </h3>
                                            <span><?php echo $row[1] ; ?></span>
                                        </div>
                                        <a href=<?php echo $row[5]; ?>>Buy Now</a> 
                                    </div>
                                </div>
                            </div>
                        </div> 

                    <?php }
                }
            }

    // -----------------------------------------------------------------------------------

    // ===================================================================================
    //                           Individual Product 
    // ===================================================================================

            $con1=mysqli_connect("localhost","root","","miniproj");
            $sql1="SELECT * FROM products";
            $result2=mysqli_query($con1,$sql1); 
            
            echo "<span class='head'><center>Keyboard</center></span>";

            ?><div class="parent"><?php
            while ($row=mysqli_fetch_row($result2)){
                if($row[2]=="keyboard"){
                    
                    if($row[1]<$keyboard){
                        // echo $row[1]; 
                        ?>  
                        
                            <div class="container">
                                <div class="card">
                                    <div class="imgBox">
                                        <img src='http://127.0.0.1:8887/<?php echo $row[4] ?>'> 
                                        
                                    </div>
                                    <div class="contentBx">
                                        <h2><?php echo $row[0] ; ?></h2>
                                        <div class="price">
                                            <h3>Price: </h3>
                                            <span><?php echo $row[1] ; ?></span>
                                        </div>
                                        <a href=<?php echo $row[5]; ?>>Buy Now</a> 
                                    </div>
                                </div>
                            </div>
                        
                        

                    <?php 
                    array_push($keyboard_Array1,$row[1]);
                    }
                    
                }
                
            }
            ?></div><?php
            
            echo "<span class='head'><center>RAM</center></span>";

            $con1=mysqli_connect("localhost","root","","miniproj");
            $sql1="SELECT * FROM products";
            $result2=mysqli_query($con1,$sql1);  
            ?><div class="parent"><?php
            while ($row=mysqli_fetch_row($result2)){
                if($row[2]=="ram"){
                    if($row[1]<$ram+$keyboard-max($keyboard_Array1)){
                        // echo $row[1]; 
                        ?>  
                        
                            <div class="container">
                                <div class="card">
                                    <div class="imgBox">
                                        <img src='http://127.0.0.1:8887/<?php echo $row[4] ?>'> 
                                        
                                    </div>
                                    <div class="contentBx">
                                        <h2><?php echo $row[0] ; ?></h2>
                                        <div class="price">
                                            <h3>Price: </h3>
                                            <span><?php echo $row[1] ; ?></span>
                                        </div>
                                        <a href=<?php echo $row[5]; ?>>Buy Now</a> 
                                    </div>
                                </div>
                            </div>
                            

                    <?php 
                    array_push($ram_Array1,$row[1]);
                    }
                }
                
            }

            ?></div><?php

            echo "<span class='head'><center>CPU</center></span>";

            $con1=mysqli_connect("localhost","root","","miniproj");
            $sql1="SELECT * FROM products";
            $result2=mysqli_query($con1,$sql1);  
            ?><div class="parent"><?php
            while ($row=mysqli_fetch_row($result2)){
                if($row[2]=="CPU"){
                    if($row[1]<$CPU+$ram-max($ram_Array1)){
                        // echo $row[1]; 
                        ?>  
                        
                            <div class="container">
                                <div class="card">
                                    <div class="imgBox">
                                        <img src='http://127.0.0.1:8887/<?php echo $row[4] ?>'> 
                                        
                                    </div>
                                    <div class="contentBx">
                                        <h2><?php echo $row[0] ; ?></h2>
                                        <div class="price">
                                            <h3>Price: </h3>
                                            <span><?php echo $row[1] ; ?></span>
                                        </div>
                                        <a href=<?php echo $row[5]; ?>>Buy Now</a> 
                                    </div>
                                </div>
                            </div>
                        

                    <?php 
                    array_push($CPU_Array1,$row[1]);
                    }
                }
                
            }

            ?></div><?php

            echo "<span class='head'><center>GPU</center></span>";

            $con1=mysqli_connect("localhost","root","","miniproj");
            $sql1="SELECT * FROM products";
            $result2=mysqli_query($con1,$sql1);  
            ?><div class="parent"><?php
            while ($row=mysqli_fetch_row($result2)){
                if($row[2]=="GPU"){
                    if($row[1]<$GPU){
                        // echo $row[1]; 
                        ?>  
                        
                            <div class="container">
                                <div class="card">
                                    <div class="imgBox">
                                        <img src='http://127.0.0.1:8887/<?php echo $row[4] ?>'> 
                                        
                                    </div>
                                    <div class="contentBx">
                                        <h2><?php echo $row[0] ; ?></h2>
                                        <div class="price">
                                            <h3>Price: </h3>
                                            <span><?php echo $row[1] ; ?></span>
                                        </div>
                                        <a href=<?php echo $row[5]; ?>>Buy Now</a> 
                                    </div>
                                </div>
                            </div>
                        
                        

                    <?php 
                    array_push($GPU_Array1,$row[1]);  
                    }
                }
                
            }

            ?></div><?php

            echo "<span class='head'><center>MOUSE</center></span>";

            $con1=mysqli_connect("localhost","root","","miniproj");
            $sql1="SELECT * FROM products";
            $result2=mysqli_query($con1,$sql1);  
            ?><div class="parent"><?php
            while ($row=mysqli_fetch_row($result2)){
                if($row[2]=="mouse"){
                    if($row[1]<$mouse){
                        // echo $row[1]; 
                        ?>  
                        
                            <div class="container">
                                <div class="card">
                                    <div class="imgBox">
                                        <img src='http://127.0.0.1:8887/<?php echo $row[4] ?>'> 
                                        
                                    </div>
                                    <div class="contentBx">
                                        <h2><?php echo $row[0] ; ?></h2>
                                        <div class="price">
                                            <h3>Price: </h3>
                                            <span><?php echo $row[1] ; ?></span>
                                        </div>
                                        <a href=<?php echo $row[5]; ?>>Buy Now</a> 
                                    </div>
                                </div>
                            </div>
                        
                        

                    <?php 
                    
                    }
                }
                
            }
            ?></div><?php 


            }
        }
        
        






        


            
?>

</body>
</html>