<?php
   if(isset($_REQUEST['btn_submit']))
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
         move_uploaded_file($file_tmp,"profile_photo/".$date1."_".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
  
   }
?>
<html>
   <body>
      
      <form action="test.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit" name="btn_submit"/>
      </form>
      
   </body>
</html>