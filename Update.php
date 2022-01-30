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

if (isset($_REQUEST['btn_submit']))
{
	executeQuery("UPDATE registration SET std_fname='".$_REQUEST['std_fname']."',std_lname='".$_REQUEST['std_lname']."',std_email='".$_REQUEST['std_email']."',std_mobile='".$_REQUEST['std_mobile']."',std_dob='".$_REQUEST['std_dob']."',std_course='".$_REQUEST['std_course']."',std_gender='".$_REQUEST['std_gender']."',std_address='".$_REQUEST['std_address']."',std_city='".$_REQUEST['std_city']."',std_type='".$_REQUEST['std_type']."',std_question='".$_REQUEST['std_question']."',std_ans='".$_REQUEST['std_ans']."' WHERE std_email='".$_SESSION['email']."'");
	
	$upmsg="Updated Sucessfully";
	
}



include("header.php");


?>








<div class="row">

    <div class="col-lg-7">
      <h1 class="page-header">Update Information:</h1>
    </div>
    
    <!-- /.col-lg-12 --> 

  <div class="row">
    <div class="col-lg-7">
      <div>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
      </div>
      <div>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
      </div>
    </div>
    
    <!-- /.col-lg-12 --> 
 
  
  <!-- /.row -->

    <div class="col-lg-7">
      <div class="panel panel-default">
        <div class="panel-heading"> </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
            
            
            <?php
			if(isset($upmsg))
			{
				
			         
            
           
			echo "<div>".$upmsg;
			
			echo "</div>";
			}
			?>
            
            
            
            
            
              <form role="form" data-toggle="validator" action="Update.php" method="post">
                <div class="form-group">
                  <label>First Name:</label>
                  <input type="text" value="<?php echo $r1['std_fname'] ?>" name="std_fname" class="form-control" id="inputSuccess" required>
                </div>
                <div class="form-group">
                  <label>Last Name:</label>
                  <input  type="text" value="<?php echo $r1['std_lname'] ?>"  name="std_lname" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Email ID:</label>
                  <input type="email" value="<?php echo $r1['std_email'] ?>"  name="std_email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Mobile Number:</label>
                  <input type="number" value="<?php echo $r1['std_mobile'] ?>"  name="std_mobile" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Date Of Birth:</label>
                  <input type="date"  value="<?php echo $r1['std_dob'] ?>" name="std_dob" class="form-control"/>
                </div>
                <div class="form-group">
                  <label>Course:</label>
                  <select  name="std_course"  class="form-control" >
                    <option value="<?php echo $r1['std_course'] ?>"> <?php echo $r1['std_course'] ?></option>
                    <option value="Computer">Computer</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="E&TC">E&TC</option>
                    <option value="Civil">Civil</option>
                    <option value="Chemical">Chemical</option>
                    <option value="Electrical">Electrical</option>
                    <option value="IT">IT</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="std_gender" id="optionsRadios1" value="Male" <?php if($r1['std_gender']=="Male"){echo "checked";}?>>
                      Male </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="std_gender" id="optionsRadios2" value="Female" <?php if($r1['std_gender']=="Female"){echo "checked";}?>>
                      Female </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="std_gender" id="optionsRadios3" value="Other" <?php if($r1['std_gender']=="Other"){echo "checked";}?>>
                      Others </label>
                  </div>
                </div>
               
                <div class="form-group">
                  <label>Address:</label>
                  <input type="text" name="std_address" value="<?php echo $r1['std_address'] ?>" class="form-control" rows="3">
                  </textarea>
                </div>
                <div class="form-group">
                  <label>City:</label>
                  <input  type="text" name="std_city" value="<?php echo $r1['std_city'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Role:</label>
                  <select name="std_type" class="form-control" >
                   <option value="<?php echo $r1['std_type'] ?>"><?php echo $r1['std_type'] ?> </option>
                    <option value="Current student">What is your Pet name?</option>
                    <option value="Allumni student">What is your school name?</option>
                    <option value="Staff/faculty">What is your grandfather name?</option>
                  </select>
                </div>
               <div class="form-group">
                  <label>Security Question:</label>
                  <select name="std_question" class="form-control" >
                   <option value="<?php echo $r1['std_question'] ?>"><?php echo $r1['std_question'] ?></option>
                    <option value="What is your Pet name?">What is your Pet name?</option>
                    <option value="Allumni student">Allumni student</option>
                    <option value="Staff/faculty">Staff/faculty</option>
                    </select><br />
                     <input type="text" value="<?php echo $r1['std_ans'] ?>" name="std_ans" class="form-control" id="inputSuccess" placeholder="Enter Answer.." required>
                </div>
                <button type="submit" name="btn_submit" class="btn btn-primary btn-lg">Submit</button>
                 
              </form>
            </div>
          </div>
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
