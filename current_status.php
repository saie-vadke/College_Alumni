<?php
session_start();

include("connection.php");

$check_user1=executeQuery("SELECT * FROM update_status WHERE std_email='".$_SESSION['email']."'");
$r2=@mysql_fetch_array($check_user1);
if (isset($_REQUEST['btn_update']))

{
	
	
	if(@mysql_num_rows($check_user1)>0)
	{
		executeQuery("UPDATE update_status SET company_name='".$_REQUEST['company_name']."',company_workarea='".$_REQUEST['company_workarea']."',company_position='".$_REQUEST['company_position']."', company_organization='".$_REQUEST['company_organization']."' ,company_salary='".$_REQUEST['company_salary']."' WHERE std_email='".$_SESSION['email']."'");
	
	$upmsg="Updated Sucessfully";
	}
	
	
	else
	{
	
	
			$insertq="INSERT INTO update_status VALUES(NULL,'".$_SESSION['email']."','".$_REQUEST['company_name']."', '".$_REQUEST['company_workarea']."','".$_REQUEST['company_position']."','".$_REQUEST['company_organization']."','".$_REQUEST['company_salary']."')";
		
		if(!executeQuery($insertq))
		{
			$exitmsg= "Query Not Execute Error".@mysql_error();
		}
		
		else
		{
			$upmsg= "Record added Successfully";
		}
	}

}



include("header.php");


?>


<div class="row">
  <div class="col-lg-7 bg-info" style="margin-left: 50px; background-color: #FFF; border: 1px #A448FF solid; margin-top: 20px;">
    <h3 style="margin-bottom: 30px; color:#A448FF; border-bottom: 1px #999999 solid;" align="center"> Current Status </h3>
    
     <?php
	  if (isset($exitmsg))
	  {
	  
	  ?>
    					<div class="alert alert-danger alert-dismissable">
                        <form action="">
                                <button type="submit" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                </form>
                                <?php
								echo $exitmsg;
								?>
                            </div>
                            
                            
                            <?php
	  }
							
   
   if (isset($upmsg))
	  {
	  
	  ?>
    					<div class="alert alert-success alert-dismissable">
                            <form action="">
                                <button type="submit" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                </form>
                                <?php
								echo $upmsg; 
								
								?>
                               
                                
                            </div>
                            
                            
                            <?php
	  }
							?>
   
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
      <div class="form-group">
      <form action="current_status.php" method="post">
                  <label>Company Name:</label>
                  <input type="text" name="company_name" value="<?php echo $r2['company_name'];?>" class="form-control" required>
                </div>
                 <div class="form-group">
                  <label> Working Area:</label>
                  <input type="text" name="company_workarea" value="<?php echo $r2['company_workarea'];?>" class="form-control" required>
                </div>
                 <div class="form-group">
                  <label>Working Position:</label>
                  <input type="text" name="company_position"  value="<?php echo $r2['company_position'];?>" class="form-control" required>
                </div>
                 <div class="form-group">
                  <label>Organization:</label>
                  <input type="text" name="company_organization" value="<?php echo $r2['company_organization'];?>"  class="form-control" required>
                </div>
                 <div class="form-group">
                  <label>Salary</label>
                  <input type="text" name="company_salary" value="<?php echo $r2['company_salary'];?>" class="form-control" required>
                </div>
                <div style="margin-bottom:20px">
                   <button type="submit" name="btn_update" class="btn btn-primary btn-lg">Update</button>
                                        </div>
      
      
    
    </form>
            </div>
           </div>
           
           
           
           
           
           
    
  </div>
</div>





</body>
</html>