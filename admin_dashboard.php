<?php
session_start();
include("connection.php");
include("mainheader.php");
?>





           
                    <div class="panel panel-default">
                      
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sr.NO</th>
                                                    <th>PICTURE</th>
                                                      <th>NAME</th>
                                                    <th>EMAIL ID</th>
                                                    <th>CONTACT NO</th>
                                                     <th>ADDRESS</th>
                                                     <th>COURSE</th>
                                                    
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
											echo "<td>".$r2['std_mobile']."</td>";
											 echo "<td>".$r2['std_address']."</td>";
											 echo "<td>".$r2['std_course']."</td>";
                                       echo "</tr>";
									   
							   }
										?>
                                                                             

                                    </tbody>
                                       </table>
                                       
                                        </table>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
  
                                       
                                       
                                       
                                       
                                       </div>
                                       </div>
                                       </div>
                                       
                  
                    <!-- /.col-lg-4 -->
                </div>
            </div>
                   
                    
                                        
                                       
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                               
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

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
