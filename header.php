

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Student</title>

<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="vendor/morrisjs/morris.css" rel="stylesheet">

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
    <p style="color:#000;"> <a href="" Home /p>
  </div>
  <div class="col-lg-9 text-center">
    <h1 style="margin-top: 10px; color: #FFF; font-size: 60px; font-family: Georgia, 'Times New Roman', Times, serif; text-shadow: 5px 3px 3px #666666">COLLEGE ALLUMNI PORTAL </h1>
    <h3 style="color: #FFF; line-height: 1px; text-align: right">Type some details..... </h3>
  </div>
</div >
 <div class="Menu_Bar" align="right" style="background-color:#9CF">
  <a  href="Student_dash.php" style=" font-size:24px; margin-right:20px" >Home</a>
  <a href="about_us.php" style="font-size:24px;margin-right:20px">About Us</a>
  <a href="Feedback.php"  style="font-size:24px;margin-right:20px">Feedback</a>
  <a href="Photo_galary.php" style="font-size:24px;margin-right:20px">Photo Galary</a>
</div> 










  
            
<div class="row">
<div class=" col-lg-4 fa-border text-center" style=" border:1px #CCCCCC solid; margin-top:20px" >



 <h1> 
 
 <?php
 $name= executeQuery("SELECT * FROM registration WHERE std_email='".$_SESSION['email']."'");
if($r1=@mysql_fetch_array($name))
{
	echo $r1['std_fname']." ".$r1['std_lname'];
}
?>
 
 
 
 
 
  </h1>
 <div style="margin-top: 50px;">  <?php
			  $result=executeQuery("SELECT * FROM registration WHERE std_email='".$_SESSION['email']."'");
			  $r1=@mysql_fetch_array($result);
			  ?>
              <img   width=50% src="profile_photo/<?php echo $r1['std_picture']?>">  </div>
  <ul  class="nav" id="side-menu">
     <li> <a href="Student_dash.php"> Home </a> </li>
    <li> <a href="Update.php"> Edit Profile</a> </li>
    <li> <a href="create_post.php"> Create Post </a></li>
    <li> <a href="invite.php">Invite Friend </a></li>
     <li> <a href="current_status.php">Current Status </a></li>
    
    <li> <a href="search_stud.php">Search Students </a></li>
     <li> <a href="Change_Password.php">Change Password </a></li>
       <li> <a href="profile.php">Change Profile Photo </a></li>
        
     <li> 	
         <form action="Student_dash.php" method="post">
                <input type="submit" value="Log Out" name="btn_logout" class="btn btn-danger"> 
         </form>
		</li>
  </ul>
</div>