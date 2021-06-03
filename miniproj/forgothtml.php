<?php include("forgot.php"); ?>
<html>
    <head>
        <title>Forgot Password?</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="forgot.css?ver=<?php echo rand(111,999)?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
       <?php if(count($errors)>0){
    echo "<script>$( document ).ready(function() {
            $('#myModal').modal('show')});</script>";
    } ?>
	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">WARNING!</h4>
        </div>
        <div class="modal-body text-center">
            <?php if (count($errors) > 0) : ?>
                <?php foreach ($errors as $error) : ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach ?>
            <?php  endif ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
       <div class="forgot_container">
            <div class="child_container signup_form">
                <div class="headers">
                    <h2>FORGOT PASSWORD?</h2>
                    <i class="fa fa-lock fa-5x"></i>
                </div>
                <form method="POST">
                    <div class="form-group">
                        <input class="form_control" type="text" id="change" class="change" name="change" placeholder="Enter Email">
                    </div>
                    <div class="foot">
                        <input class="btn btn--form" type="submit" value="Submit" name="for_user" />
                        <ul class="list-inline">
                            <li>
                                <a class="signup__link" href="http://localhost/miniproj/login_html.php">Go Back</a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
       </div>
    </body>
</html>