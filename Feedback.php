
<?php
session_start();
include("connection.php");

if (isset($_REQUEST['btn_submit']))

{

	
	
	
	
	
	$check_user=executeQuery("SELECT * FROM registration WHERE std_email='".$_REQUEST['std_email']."'");
	
	if(@mysql_num_rows($check_user)>0)
	{
		$exitmsg= "Email ID allready exits";
	}
	
	
	else
	{
	
	
			$insertq="INSERT INTO feedback VALUES(NULL,'".$_REQUEST['std_name']."','".$_REQUEST['std_address']."','".$_REQUEST['std_email']."','".$_REQUEST['std_query']."')";
		
		if(!executeQuery($insertq))
		{
			$exitmsg= "Query Not Execute Error".@mysql_error();
		}
		
		else
		{
			$smsg= "Feedback send Successfully";
		}
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
<title>FeedBack</title>

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
<div id="wrapper">
  <div class="row" style="background-color: #2F97FF; border-bottom: 4px #999999 solid;">
    <div class="col-lg-2 "> </div>
    <div class="col-lg-1 "> <img src="" width="100">
      <p style="color:#000;"> <a href="" Home </p>
    </div>
    <div class="col-lg-9 text-center">
      <h1 style="margin-top: 10px; color: #FFF; font-size: 60px; font-family: Georgia, 'Times New Roman', Times, serif; text-shadow: 5px 3px 3px #666666">COLLEGE ALLUMNI PORTAL </h1>
      <h3 style="color: #FFF; line-height: 1px; text-align: right">Type some details..... </h3>
    </div>
  </div>
  
   <div class="Menu_Bar" align="right" style="background-color:#9CF">
  <a  href="index.php" style=" font-size:24px; margin-right:20px" >Home</a>
  <a href="about_us.php" style="font-size:24px;margin-right:20px">About Us</a>
  <a href="Feedback.php"  style="font-size:24px;margin-right:20px">Feedback</a>
  <a href="Photo_galary.php" style="font-size:24px;margin-right:20px">Photo Galary</a>
</div> 

  
  
  
  
  
  
  
  
  
  
  
  
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-10" style="margin-top:30px" align="center">
        <h1 class="page-header">FeedBack:</h1>
      </div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-10">
      
      
       <?php
	  if (isset($exitmsg))
	  {
	  
	  ?>
    					<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php
								echo $exitmsg;
								?>
                            </div>
                            
                            
                            <?php
	  }
							
   
   if (isset($smsg))
	  {
	  
	  ?>
    					<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php
								echo $smsg; 
								
								?>
                               
                                
                            </div>
                            
                            
                            <?php
	  }
							?>
   
      
      
      
      
      
        <div class="panel panel-default">
          <div class="panel-heading"> </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form role="form" action="" method="post">
                  <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="std_name" class="form-control" id="inputSuccess" required>
                  </div>
                  <div class="form-group">
                    <label>Address:</label>
                    <input type="text" name="std_address" class="form-control" id="inputSuccess" required>
                  </div>
                 
                  <div class="form-group">
                    <label>Email ID:</label>
                    <input type="text" name="std_email" class="form-control" id="inputSuccess" required>
                  </div>
                  <div class="form-group">
                    <label>Your Query:</label>
                    <input type="textarea" name= "std_query" class="form-control" rows="3"></textarea>
                  </div>
             
                <button type="submit" name="btn_submit" class="btn btn-primary btn-lg">Submit</button>
                   </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script src="vendor/bootstrap/js/bootstrap.min.js"></script> 

<!-- Metis Menu Plugin JavaScript --> 
<script src="vendor/metisMenu/metisMenu.min.js"></script> 

<!-- Morris Charts JavaScript --> 
<script src="vendor/raphael/raphael.min.js"></script> 
<script src="vendor/morrisjs/morris.min.js"></script> 
<script src="data/morris-data.js"></script> 

<!-- Custom Theme JavaScript --> 
<script src="dist/js/sb-admin-2.js"></script>
</body>
</html>
