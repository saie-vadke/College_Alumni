<?Php
session_start();
include("connection.php");

if (isset($_REQUEST['btn_login']))

{
	$check_cr=executeQuery("SELECT * FROM registration WHERE std_email='".$_REQUEST['email']."' AND std_password='".$_REQUEST['password']."'");
	
	if(@mysql_num_rows($check_cr)>0)
	{
		$_SESSION['email']=$_REQUEST['email'];
		header("Location:Student_dash.php");
	}
	else
	{
		$errormsg= "Please Enter Valid Email and Password";
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
<title>Resgistration:</title>

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
 <div class="Menu_Bar" align="right" style="background-color:#6CF">
  <a  href="index.php" style=" font-size:24px; margin-right:20px" >Home</a>
  <a href="about_us.php" style="font-size:24px;margin-right:20px">About Us</a>
  <a href="Feedback.php"  style="font-size:24px;margin-right:20px">Feedback</a>
  <a href="Photo_galary.php" style="font-size:24px;margin-right:20px">Photo Galary</a>
</div> 











<div class="col-lg-3" >
<h4 style="text-align:center; border-bottom:2px solid #333;"><b> Allunmi Student</b> </h4>
<marquee direction="up" height="400px" width="100%">
<?php
$check_stud=executeQuery("SELECT * FROM registration WHERE std_type='Allumni student'");
while($r1=@mysql_fetch_array($check_stud))
{

			  ?>
              <center> <img   width=50% src="profile_photo/<?php echo $r1['std_picture']?>"> </center>
              
<h3 align="center"><?php echo $r1['std_fname']." ".$r1['std_lname']
?>
</h3>
<h5 align="center"> <?php echo $r1['std_course'] ?>
<br>
 <?php echo $r1['std_address'] ?></h5>
<div style="border-bottom:2px #999999 solid; width:100%; text-align:center;"> </div>
 <?php
}
?>
 </marquee>
 </div>



 
 <div class="row">
 <div class="col-lg-5 alert-info" style="margin-top:20px;">
 <h2 style="margin-top:20px; color:#606"> Wel-come To Collage Allumni portal</h2>
 <p>We are formulating the best alumni web portal which will facilitate effective communication platform through online chatting, profile viewing and personal messaging within three stakeholders of the institute viz- College , College students , Alumni. This portal will be providing direct contact of the alumni with the students as well as the staff members. The desired query of the existing students will be answered faster.</p>
 <p>This keeps the students updated with the current updates and demands of the industrial market. The students neither posting  nor chatting can also silently be updated with the on going in the college aswell as the market. This portal highlights the feature of communication, which will enable the current students to have interaction with the alumni of the college for getting various updates on current industry trends, Internship opportunity, sponsored projects and various referral opening in the corporate world.</p> 
 <p>This portal will serve the cause of integrating all the stakeholders of Institute such as, Alumni, College students, Faculties to avail the guidance and knowledge sharing on various domains. In this project we proposed the Dynamic Architectural design of the Alumni portal,which enable the two way communication between all stakeholders.</p>
</div>
 <div class="col-lg-3" style="margin-left:20px;" align="center">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title " align="center">Please Sign In</h3>
                       
  
      
     <?php if (isset($errormsg))
	 {
		 ?>
		 
    					<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php
								echo $errormsg;
								?>
                            </div>
             <?php
	 }
	 ?>
                        
                    
                    <div class="panel-body">
                        <form role="form" action="index.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="btn_login" class="btn btn-lg btn-success btn-block" value="Login" >
                               
                                <a href="forgot_password.php">Forgot Password</a> ||
                                 <a href="registration.php">Registration</a>
                                    
                                    
                            </fieldset>
                        </form>
                      
                    </div>
                    <a href="Admin_login.php".php"> Admin Login...</a>
                     
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
