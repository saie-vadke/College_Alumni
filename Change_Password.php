<?php
session_start();

if(!isset($_SESSION['email_id']))
{
	header("Location:index.php");
}

if(isset($_REQUEST['btn_save']))
{
	include("connection.php");
	$pass2=$_REQUEST['new_password'];
	$conf_pass=$_REQUEST['confirm_password'];
	if ($pass2==$conf_pass)
	{
		executeQuery("UPDATE registration set std_password='".$pass2."' WHERE std_email='".$_SESSION['email_id']."'");
		$smasg="Password Updated Sucessfully";
	}
	else
	{
		$errormsg="Password Not Matched";
	}
	
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Change Password </title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="row" style="background-color: #2F97FF; border-bottom: 4px #999999 solid;">
  <div class="col-lg-2 "> </div>
  <div class="col-lg-1 "> <img src="" width="100"> </div>
  <div class="col-lg-9 text-center">
    <h1 style="margin-top: 10px; color: #FFF; font-size: 60px; font-family: Georgia, 'Times New Roman', Times, serif; text-shadow: 5px 3px 3px #666666">COLLEGE ALLUMNI PORTAL </h1>
    <h3 style="color: #FFF; line-height: 1px; text-align: right">Type some details..... </h3>
  </div>
</div>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-10">
      <h1 class="page-header">Change Password:</h1>
    </div>
    
    <!-- /.col-lg-12 --> 
  </div>
  <div class="row">
    <div class="col-lg-10">
      <div>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
      </div>
      <div>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
      </div>
    </div>
    
    <!-- /.col-lg-12 --> 
  </div>
  
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-10">
      <div class="panel panel-default">
        <div class="panel-heading"> </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form role="form" data-toggle="validator" action="Change_Password.php" method="post">
               <?php echo "Welcome ".$_SESSION['email_id']; ?> 
                <div class="form-group">
                  <label>New Password:</label>
                  <input  type="text" name="new_password" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Confirm Password:</label>
                  <input type="text" name="confirm_password" class="form-control" required>
                </div>
                 <button type="Save" name="btn_save" class="btn btn-primary btn-lg">Save</button>
                  <?php
			if (isset($errormsg))
			{
				?>
                  <div class="alert-danger alert">
                <?php
				echo "<h6>".$errormsg."</h6>";
				echo " </div>";
			}
			if (isset($smasg))
			{
				?>
                  <div class="alert-success alert" style="margin-top:20px">
                <?php
				echo "<h6>".$smasg."</h6>";
			    echo '<a href="index.php"> Click Here To Login.....</a>';

				echo " </div>";
			
			}
			?>
              </form>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>






    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
