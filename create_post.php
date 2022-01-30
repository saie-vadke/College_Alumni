<?php


session_start();
include("connection.php");
date_default_timezone_set("Asia/Kolkata");
$cdate=date("l jS \of F Y h:i:s A");

if (isset($_REQUEST['btn_submit']))
{
	$chekrecord=executeQuery("SELECT * FROM post WHERE post_title='".$_REQUEST['post_title']."' AND post_disc='".$_REQUEST['post_disc']."'");
		if(@mysql_num_rows($chekrecord)>0)
		{
		}

	
	else
	{
		$insertq="INSERT INTO post VALUES(NULL,'".$_SESSION['email']."','".$_REQUEST['std_name']."','".$_REQUEST['post_title']."','".$_REQUEST['post_disc']."','".$cdate."','0')";
		
		if(!executeQuery($insertq))
		{
			$exitmsg= "Query Not Execute Error".@mysql_error();
		}
		
		else
		{
			$smsg= "Post Successfully";
		}
		
	}

		
}

if(isset($_POST['btn_delete']))
	{
		
		executeQuery("DELETE FROM post where sr_no='".$_POST['btn_delete']."'");
	}	
	
	



include("header.php");


?>




<div class="row">
  <div class="col-lg-7 " style="margin-top: 20px; margin-left: 50px; border: 1px #CCCCCC solid;">
    <h1> Create Post </h1>
    <h3>
    <?php if (isset($msg))
	{
		echo $msg;
	}
	?>
    
     </h3>
    
    <form action="create_post.php" method="post">
    <div class="form-group">
        <label> UserName:</label>
        <input name="std_name" class="form-control" required>
      </div>

      <div class="form-group">
        <label>Title:</label>
        <input name="post_title" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Description:</label>
        <textarea name="post_disc" class="form-control" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-lg" name="btn_submit" align="center" style="margin-bottom:20px;" >Post</button>
    </form>
  </div>
  <div class="row">
    <div class="col-lg-7 " style="margin-top: 20px; margin-left: 50px; border: 1px #CCCCCC solid;">
      <h1> Your post </h1>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th>Sr No</th>
              <th>Title</th>
              <th>Description</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          
           <form action="create_post.php" method="post">
            <?php
$check_post=executeQuery("SELECT * FROM post WHERE email='".$_SESSION['email']."' ORDER BY sr_no DESC");
$sr_no1=0;

while($r1=@mysql_fetch_array($check_post))
{
$sr_no1=$sr_no1+1;
?>
            <tr>
              <td><?php echo $sr_no1 ?></td>
              <td><?php echo $r1['post_title'] ?></td>
              <td><?php echo $r1['post_disc'] ?></td>
              <td><?php echo $r1['post_date'] ?></td>
              <td>
             <button type="submit" name="btn_delete" value="<?php echo $r1['sr_no'] ?>"> Delete </button>
             
             
              </td>
            </tr>
            <?php
}
?>
 </form>
          </tbody>
        </table>
      </div>
    </div>
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
