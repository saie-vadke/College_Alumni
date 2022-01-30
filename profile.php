<?php
session_start();
include("connection.php");


	
  
   if(isset($_REQUEST['btn_upload']))
   {
   
   $date1=date("ljS\ofFYhisA");
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
	  $arraytype=explode('.',$_FILES['image']['name']);
      $file_ext=strtolower(end($arraytype));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
		  $fullname=$file_name."_".$date1.".".$file_ext;
         move_uploaded_file($file_tmp,"profile_photo/".$fullname);
		 executeQuery("UPDATE registration set std_picture='".$fullname."' WHERE std_email='".$_SESSION['email']."'");
         echo "Success";
      }else{
         print_r($errors);
      }
  
   }	
	
	
	
include("header.php");


?>











  
            

<div class="row">
  <div class="col-lg-7 bg-info" style="margin-left: 50px; background-color: #FFF; border: 1px #A448FF solid; margin-top: 20px;">
    <h3 style="margin-bottom: 30px; color:#A448FF; border-bottom: 1px #999999 solid;" align="center"> Upload Profile </h3>
    
    
           <div class="row">
            <div class="col-lg-4" style="border-right:2px solid #530053; text-align:center; margin:20px;">
              <h3 style="border-bottom:2px #999999 solid;" align="center"> Old Photo </h3>
              <?php
			  $result=executeQuery("SELECT * FROM registration WHERE std_email='".$_SESSION['email']."'");
			  $r1=@mysql_fetch_array($result);
			  ?>
              <img   width=80% src="profile_photo/<?php echo $r1['std_picture']?>"> 
            </div>
             <div class="col-lg-6" style="margin:20px;">
           <h3 style="border-bottom:2px #999999 solid;" align="center">Upload New Photo </h3>
               	<form action="profile.php" method="post" class="form-group" enctype="multipart/form-data">
          				   <div class="form-group">
                                            <label>Attached Your Picture:</label>
                                               <input type="file" name="image" /><br />
                                          
                                            
                                            <button type="submit" name="btn_upload" class="btn btn-primary btn-sm">Upload</button>
                                        </div>
                                        

       
    
    </form>
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
