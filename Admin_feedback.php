<?php
session_start();
include("connection.php");
include("mainheader.php");
?>
<body>

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
                                                    <th>Name</th>
                                                     <th>Address</th>
                                                   
                                                    <th>Email Id</th>
                                                    <th>Query</th>
                                                     
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                    <?php
							   $feedback=executeQuery("SELECT * FROM feedback ORDER BY feed_id DESC");
							   $srno=0;
							   while($r5=mysql_fetch_array($feedback))
							   {	
							   $srno=$srno+1;					  
                                       echo "<tr>";
                                            echo "<td>".$srno."</td>";
                                           ?>
                                          
											<?php
											
											
											
											
											
											
                                            echo "<td>".$r5['feed_name']."</td>";
                                            echo "<td>".$r5['feed_address']."</td>";
											
											 echo "<td>".$r5['feed_email']."</td>";
											 echo "<td>".$r5['feed_query']."</td>";
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