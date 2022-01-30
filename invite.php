<?php
session_start();
include("connection.php");
if(isset($_REQUEST['btn_submit']))
{
	
	$to =$_REQUEST['email_id'];
	$subject = "Invite to College Alumni Portal";
	$txt = "jhf".$_REQUEST['msg'];
	$headers = "From: popatnagare@gmail.com" . "\r\n" .
	"CC: dkalumni@gmail.com";
	
	mail($to,$subject,$txt,$headers);
}
include("header.php");


?>


<div class="row">
  <div class="col-lg-7 bg-info" style="margin-left: 50px; background-color: #FFF; border: 1px #0033FF solid; margin-top: 20px;">
    <h3 style="margin-top: 30px; color: #60F" align="center"> Invite Friend </h3>
    
    <form action="invite.php" method="post" class="form-group">
    	<div class="form-group">
            <label> Enter Your Friend Email ID </label>
            <input type="text" class="form-control" name="email_id">  
        </div>
        <div class="form-group">
            <label> Enter Message </label>
            <textarea class="form-control" name="msg">  </textarea>
          
        </div>
         <div class="form-group">
          <input type="submit" name="btn_submit" value="Invite" class="btn btn-success btn-lg">
           
          
        </div>
    </form>
    
  </div>
</div>


<!-- /#wrapper --> 

<!-- jQuery --> 
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
