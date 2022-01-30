<?php

include("connection.php");
session_start();
if(isset($_POST['confirm']))
	{
		
		executeQuery("UPDATE post SET post_status='1' where sr_no='".$_POST['confirm']."'");
	}	
	


if(isset($_POST['reject']))
	{
		
		executeQuery("UPDATE post SET post_status='2' where sr_no='".$_POST['reject']."'");
	}
	
include("mainheader.php");

?>




    
    <div class="col-lg-11 " style="border-left:2px solid #48A4FF; margin-left:20px; border-right:2px solid  #48A4FF"> 
     <div class="row">
    <h3 style="border-bottom:2px  solid #666; text-align:center;">  POST</h3>
     </div>
     
     <frame width="100%" height="600px">
     <?php
	  $post=executeQuery("SELECT * FROM post WHERE post_status='0' ORDER BY sr_no DESC");
	  while($r2=@mysql_fetch_array($post))
	  {
	 
	 ?>
  <form action="Admin_view_post.php" method="post">
     <div class="row" style="border-bottom:1px solid #2B95FF;">
          <center>
          <!-- <img  height="200px;" src="img/shutterstock_228607891.jpg.CROP_.promo-xlarge2.jpg" style="margin-top:10px; " /></center> -->
            <div class="col-lg-10">
            <h4 style="margin-top:00px"> <?php echo $r2['post_title']; ?> </h4>
          
             <h5><p class="fa fa-calendar"> </p>
             
            <?php echo $r2['post_date'] ?></h5>
            <p style="text-align:justify;"><?php echo $r2['post_disc']; ?> </p>
            
            <button type="submit" class="btn btn-success" value="<?php echo $r2['sr_no']; ?>" name="confirm" style="margin-bottom:20px">Confirm</button>
            <button type="submit" class="btn btn-danger" value="<?php echo $r2['sr_no']; ?>" name ="reject" style="margin-bottom:20px; ">Reject</button>
            
            </div>
	   </div>
     </form>   
       <?php
	  }
	   ?>
     
        </frame>
        
       
       
    </div>
  </div>