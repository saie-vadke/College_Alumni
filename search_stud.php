<?php
session_start();
include("connection.php");
include("header.php");
?>




 


<div class="row">
<div class="col-lg-7">


 <div class="panel-body" >
                            <div class="table-responsive" style="margin-top:50px" align="right">
                              

                               </div>
                               
                               
                               
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Profile</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
											<th>Course</th>
											
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
							   $allstud=executeQuery("SELECT * FROM registration ORDER BY sr_no DESC");
							   $srno=0;
							   while($r2=mysql_fetch_array($allstud))
							   {	
							   $srno=$srno+1;					  
                                       echo "<tr>";
                                            echo "<td>".$srno."</td>";
                                           ?>
                                           <td>
                                         
					
              <img   width="100px" src="profile_photo/<?php echo $r2['std_picture']?>">
											
											</td>
											<?php
											
											
											
											
											
											
                                            echo "<td>".$r2['std_fname']." ".$r2['std_lname']."</td>";
                                            echo "<td>".$r2['std_email']."</td>";
											 echo "<td>".$r2['std_address']."</td>";
											 echo "<td>".$r2['std_course']."</td>";
                                       echo "</tr>";
									   
							   }
										?>
                                                                             

                                    </tbody>
                                </table>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
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

<!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
 <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>


  


</body>
</html>
