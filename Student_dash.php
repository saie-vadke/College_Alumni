<?php
include("connection.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("Location:index.php");
}

if (isset($_REQUEST['btn_logout']))
{
	unset($_SESSION['email']);
	header("Location:index.php");
}



include("header.php");


?>

<div class="col-lg-8">
  <div class="row">
    <div class="col-lg-6">
      <div class="row" style="border-bottom: 1px #CCCCCC solid;">
      <?php 
	  $data=executeQuery("SELECT * FROM registration WHERE std_email='".$_SESSION['email']."'");
	  $r3=@mysql_fetch_array($data);
	  
	  
	  ?>
        <h4 style="margin-left: 10px; color: #C00;"><?php echo $r3['std_fname']." ".$r3['std_lname'] ?>  Profile</h4>
      </div>
      
      <table border="0">
      <tr> 
              <td width="80px;">Name: </td>
              <td align="left"> <?php echo $r3['std_fname']." ".$r3['std_lname'] ?></td>
      </tr>
       <tr> 
              <td>Address: </td>
              <td align="left"> <?php echo $r3['std_address'] ?></td>
      </tr>
       <tr> 
              <td>Mobile No: </td>
              <td align="left"> <?php echo $r3['std_mobile'] ?></td>
      </tr>
       <tr> 
              <td>Email: </td>
              <td align="left"> <?php echo $r3['std_email'] ?></td>
      </tr>
      
      </table>
     <?php if($r3['std_type']=="Allumni student")
	 {
		 
		 $company=executeQuery("SELECT * FROM update_status WHERE std_email='".$_SESSION['email']."'");
		 $r4=@mysql_fetch_array($company);
		 ?>
      <h4> Company Profile </h4>
      
        <table border="0">
      <tr> 
              <td width="80px;">Name: </td>
              <td align="left"> <?php echo $r4['company_name'] ?></td>
      </tr>
        <tr> 
              <td width="80px;">Workarea: </td>
              <td align="left"> <?php echo $r4['company_workarea'] ?></td>
      </tr>
        <tr> 
              <td width="80px;">Position: </td>
              <td align="left"> <?php echo $r4['company_position'] ?></td>
      </tr>
        <tr> 
              <td width="80px;">Organization: </td>
              <td align="left"> <?php echo $r4['company_organization'] ?></td>
      </tr>
       <tr> 
              <td width="80px;">Salary: </td>
              <td align="left"> <?php echo $r4['company_salary'] ?></td>
      </tr>
      
      
      
      </table>
      
      <?php
	 }
	 ?>
      
      
   
    
      
    </div>
    
    
    <div class="col-lg-6 " style="border-left:2px solid #48A4FF;"> 
     <div class="row">
    <h3 style="border-bottom:2px  solid #666; text-align:center;">  POST</h3>
     </div>
     
     <frame width="100%" height="600px">
    
     <?php
	  $post=executeQuery("SELECT * FROM post WHERE post_status='1' ORDER BY sr_no DESC");
	  while($r2=@mysql_fetch_array($post))
	  {
	 
	 ?>
     <div class="row" style="border-bottom:1px solid #2B95FF;">
          <center>
          <!-- <img  height="200px;" src="img/shutterstock_228607891.jpg.CROP_.promo-xlarge2.jpg" style="margin-top:10px; " /></center> -->
            <div class="col-lg-10">
            <label>Name</label>
             <h4 style="margin-top:00px"> <?php echo $r2['std_name']; ?></h4>
            <h4 style="margin-top:00px"> <?php echo $r2['post_title']; ?></h4>
          
             <h5><p class="fa fa-calendar"> </p>
            <?php echo $r2['post_date'] ?></h5>
            <p style="text-align:justify;"> <?php echo $r2['post_disc']; ?> </p>
            </div>
	   </div>
       
       <?php
	  }
	   ?>
        </frame>
              
       
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
