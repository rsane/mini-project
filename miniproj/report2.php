<!DOCTYPE html>
<html lang="en">
<head>

    <!-- ======================================================================================================= -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- <link href="C:\xampp\htdocs\ProgramFiles\miniproj\css\fontawesome-free-5.15.3-web\css\all.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <style>
        body {  
          background: linear-gradient(-135deg, #4d244a, #18266b);
          min-height: 100vh;
        }
        h4{
          color: green;
        }
        p{
          color: green;
        }

        /* ================================================================================= */
        
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
        
        /* ================================================================================= */


    </style>

    <!-- ======================================================================================================= -->


</head>
<body>
    <?php

        // ==================================================================================
                        // Number of CPU Sold 
        // ==================================================================================
            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $CPU_sold=0;
            while ($row=mysqli_fetch_row($result1)){
                if($row[1]=="CPU"){
                    $CPU_sold=$CPU_sold+$row[2];
                }
            }
            $CPU_sold;

        // --------------------------------------------------------------------------


        // ==================================================================================
                        // Number of GPU Sold 
        // ==================================================================================
            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $GPU_sold=0;
            while ($row=mysqli_fetch_row($result1)){
                if($row[1]=="GPU"){
                    $GPU_sold=$GPU_sold+$row[2];
                }
            }
            $GPU_sold;

        // --------------------------------------------------------------------------


        // ==================================================================================
                        // Number of Keyboard Sold 
        // ==================================================================================
            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $Keyboard_sold=0;
            while ($row=mysqli_fetch_row($result1)){
                if($row[1]=="keyboard"){
                    $Keyboard_sold=$Keyboard_sold+$row[2];
                }
            }
            $Keyboard_sold;

        // --------------------------------------------------------------------------


        // ==================================================================================
                        // Number of Mouse Sold 
        // ==================================================================================
            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $Mouse_sold=0;
            while ($row=mysqli_fetch_row($result1)){
                if($row[1]=="mouse"){
                    $Mouse_sold=$Mouse_sold+$row[2];
                }
            }
            $Mouse_sold;

        // --------------------------------------------------------------------------

        // ==================================================================================
                        // Number of RAM Sold 
        // ==================================================================================
            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $RAM_sold=0;
            while ($row=mysqli_fetch_row($result1)){
                if($row[1]=="ram"){
                    $RAM_sold=$RAM_sold+$row[2];
                }
            }
            $RAM_sold;

        // --------------------------------------------------------------------------



        // ==================================================================================
                    // Revenue from Keyboard 
        // ==================================================================================

            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $keyboard_rev=0;
            while ($row=mysqli_fetch_row($result1)){
                if($row[1]=="keyboard"){


                    $ab=$row[2]*$row[3];

                    $keyboard_rev=$keyboard_rev+$ab;

                }
            }
            $keyboard_rev;

        // -------------------------------------------------------------------------------


        // ==================================================================================
                    // Revenue from RAM 
        // ==================================================================================

            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $RAM_rev=0;
            while ($row=mysqli_fetch_row($result1)){
                if($row[1]=="ram"){


                    $ab=$row[2]*$row[3];

                    $RAM_rev=$RAM_rev+$ab;

                }
            }
            $RAM_rev;

        // -------------------------------------------------------------------------------


        // ==================================================================================
                    // Revenue from CPU 
        // ==================================================================================

            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $CPU_rev=0;
            while ($row=mysqli_fetch_row($result1)){
                if($row[1]=="CPU"){


                    $ab=$row[2]*$row[3];

                    $CPU_rev=$CPU_rev+$ab;

                }
            }
            $CPU_rev;

        // -------------------------------------------------------------------------------


        // ==================================================================================
                    // Revenue from GPU 
        // ==================================================================================

            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $GPU_rev=0;
            while ($row=mysqli_fetch_row($result1)){
                if($row[1]=="GPU"){


                    $ab=$row[2]*$row[3];

                    $GPU_rev=$GPU_rev+$ab;

                }
            }
            $GPU_rev;

        // -------------------------------------------------------------------------------

        // ==================================================================================
                    // Revenue from Mouse 
        // ==================================================================================

            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $mouse_rev=0;
            while ($row=mysqli_fetch_row($result1)){
                if($row[1]=="mouse"){


                    $ab=$row[2]*$row[3];

                    $mouse_rev=$mouse_rev+$ab;

                }
            }
            $mouse_rev;

        // -------------------------------------------------------------------------------



        // ==================================================================================
                    // Total Clients 
        // ==================================================================================

            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM customers";
            $result1=mysqli_query($con,$sql);
            $total_users=0;
    
            if($result1){  // This will Number of Rows

                $row = mysqli_num_rows($result1);
                if($row){
                    
                    $total_users=$row;
                }
            }

            $total_users;


        // ==================================================================================
                    // Total Number of Products Sold
        // ==================================================================================

            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $total_products_sold=0;
            while ($row=mysqli_fetch_row($result1)){
                
                    $total_products_sold=$total_products_sold+$row[2];
                
            }
            $total_products_sold;

        // ==================================================================================
                    // Total Revenue
        // ==================================================================================

            $con=mysqli_connect("localhost","root","","miniproj");

            $sql="SELECT * FROM report_prod";
            $result1=mysqli_query($con,$sql);
            $total_revenue=0;
            while ($row=mysqli_fetch_row($result1)){
                
                    $total_revenue=$total_revenue+($row[2]*$row[3]);
                
            }
            $total_revenue;



    
    ?>

    <nav class="navbar">  
        <div class="logo"><h2>VENOM</h2></div>
        <ul>

                    <li><a href="http://localhost/miniproj/logout.php">Log Out</a></li>
                    
        </ul>                
    </nav> 

        <!-- ---------------------------------------------------------------------------------------------- -->
    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
          <div class="row">
            <div class="col-12 mt-3 mb-1">
              <h4 class="text-uppercase">Performance of the Company</h4>
              <p>Statistics on sales and transactions.</p>
            </div>
          </div>
            <!-- ---------------------------------------------------------------------------------------------------- -->


          <div class="row">

            <!-- ==================================   Number Of Clients  ======================================== -->

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="success"><?php echo $total_users; ?></h3>
                        <span>Total Users</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-user success font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ==================================   CPU Rev  ======================================== -->

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="danger"><?php echo $CPU_rev; ?></h3>
                        <span>Revenue Generated from CPU</span>
                      </div>
                      <div class="align-self-center">
                        <!-- <i class="icon-rocket danger font-large-2 float-right"></i> -->
                        <!-- <i class="fas fa-memory" style="font-size:45px;"></i> -->
                        <i class="fa fa-microchip" style="font-size:45px;"></i>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ==================================   GPU Rev  ======================================== -->

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="danger"><?php echo $GPU_rev ; ?></h3>
                        <span>Revenue Generated from GPU</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-rocket danger font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ==================================   Keyboard Rev  ======================================== -->

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="danger"><?php echo $keyboard_rev; ?></h3>
                        <span>Revenue Generated from Keyboard</span>
                      </div>
                      <div class="align-self-center">
                        <!-- <i class="icon-rocket danger font-large-2 float-right"></i> -->
                        <i class="fas fa-keyboard" style="font-size:45px;" ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

            <!-- ---------------------------------------------------------------------------------------------->
        
          <div class="row">

            <!-- ==================================   RAM Rev  ======================================== -->

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="danger"><?php echo $RAM_rev ; ?></h3>
                        <span>Revenue Generated from RAM</span>
                      </div>
                      <div class="align-self-center">
                        <!-- <i class="icon-rocket danger font-large-2 float-right"></i> -->
                        <i class="fa fa-money-bill-alt" style="font-size:45px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ==================================   Mouse Rev  ======================================== -->

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="danger"><?php echo $mouse_rev ; ?></h3>
                        <span>Revenue Generated from Mouse</span>
                      </div>
                      <div class="align-self-center">
                        <!-- <i class="icon-rocket danger font-large-2 float-right"></i> -->
                        <i class="fas fa-mouse-pointer" style="font-size:45px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ==================================   Total Products Sold  ======================================== -->

        
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="warning"><?php echo $total_products_sold ; ?></h3>
                        <span>Total Products Sold</span>
                      </div>
                      <div class="align-self-center">
                        <!-- <i class="icon-pie-chart warning font-large-2 float-right"></i> -->
                        <i class="fas fa-boxes" style="font-size:45px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ==================================   CPU Sold  ======================================== -->

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="primary"><?php echo $CPU_sold ; ?></h3>
                        <span>CPU Sold</span>
                      </div>
                      <div class="align-self-center">
                        <!-- <i class="icon-book-open primary font-large-2 float-right"></i> -->
                        <i class="fas fa-microchip" style="font-size:45px;"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $CPU_sold ; ?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

            <!-- ---------------------------------------------------------------------------------------------- -->
        
          <div class="row">

            <!-- ==================================   GPU Sold  ======================================== -->
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="primary"><?php echo $GPU_sold ; ?></h3>
                        <span>GPU Sold</span>
                      </div>
                      <div class="align-self-center">
                        <i class="icon-rocket danger font-large-2 float-right"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $GPU_sold ; ?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ==================================   Keyboard Sold  ======================================== -->
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="warning"><?php echo $Keyboard_sold ; ?></h3>
                        <span>Keyboard Sold</span>
                      </div>
                      <div class="align-self-center">
                        <!-- <i class="icon-bubbles warning font-large-2 float-right"></i> -->
                        <i class="fas fa-keyboard" style="font-size:45px;" ></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $Keyboard_sold ; ?>%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ==================================   RAM Sold  ======================================== -->
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="success"><?php echo $RAM_sold ; ?></h3>
                        <span>RAM Sold</span>
                      </div>
                      <div class="align-self-center">
                        <!-- <i class="icon-cup success font-large-2 float-right"></i> -->
                        <i class="fas fa-microchip" style="font-size:45px;"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $RAM_sold ; ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- ==================================   Mouse Sold  ======================================== -->
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="danger"><?php echo $Mouse_sold ; ?></h3>
                        <span>Mouse sold</span>
                      </div>
                      <div class="align-self-center">
                        <!-- <i class="icon-direction danger font-large-2 float-right"></i> -->
                        <i class="fas fa-mouse-pointer" style="font-size:45px;"></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $Mouse_sold ; ?>%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

            <!-- ---------------------------------------------------------------------------------------------- -->

      </section>
        
        <section id="stats-subtitle">
        <div class="row">
          <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">Total Revenue</h4>
            <p>Below is the total revenue generated </p>
          </div>
        </div>
      
          <!-- ============================= Total Revenue ================================================   -->
      
        <div class="row">
          <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body cleartfix">
                  <div class="media align-items-stretch">
                    <div class="align-self-center">
                      <h1 class="mr-2">Rs. <?php echo $total_revenue ; ?></h1>
                    </div>
                    <div class="media-body">
                      <h4>Total Sales</h4>
                      <span>Monthly Sales Amount</span>
                    </div>
                    <div class="align-self-center">
                      <!-- <i class="icon-heart danger font-large-2"></i> -->
                      <i class="fa fa-money-bill-alt" style="font-size:45px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- =====================================  Total Cost  =========================================== -->
      
          <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body cleartfix">
                  <div class="media align-items-stretch">
                    <div class="align-self-center">
                      <h1 class="mr-2">Rs 36,000.00</h1>
                    </div>
                    <div class="media-body">
                      <h4>Total Cost</h4>
                      <span>Monthly Cost</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-wallet success font-large-2"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
    </div>





</body>
</html>