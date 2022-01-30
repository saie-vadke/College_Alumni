+

<?php
include("mainheader.php");

?>







  <div class="row">
    <div class="col-lg-10">
      <h1 class="page-header">Update Information:</h1>
    </div>
    
    <!-- /.col-lg-12 --> 
  </div>
  
  
  <div class="row">
    <div class="col-lg-10">
      <div>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
      </div>
      <div>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
      </div>
    </div>
    
    <!-- /.col-lg-12 --> 
  </div>
  
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-10">
      <div class="panel panel-default">
        <div class="panel-heading"> </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-10">
              <form role="form" data-toggle="validator" action="Admin_Update.php" method="post">
                <div class="form-group">
                  <label>First Name:</label>
                  <input type="text" name="std_fname" class="form-control" id="inputSuccess" required>
                </div>
                <div class="form-group">
                  <label>Last Name:</label>
                  <input  type="text" name="std_lname" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Email ID:</label>
                  <input type="email" name="std_email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Mobile Number:</label>
                  <input type="number" name="std_mobile" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Date Of Birth:</label>
                  <input type="date"  name="std_dob" class="form-control"/>
                </div>
                <div class="form-group">
                  <label>Course:</label>
                  <select  name="std_course" class="form-control" >
                    <option value="-1">Course:</option>
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
                      <input type="radio" name="std_gender" id="optionsRadios1" value="Male" checked>
                      Male </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="std_gender" id="optionsRadios2" value="Female">
                      Female </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="std_gender" id="optionsRadios3" value="Other">
                      Others </label>
                  </div>
                </div>
              
                <div class="form-group">
                  <label>Address:</label>
                  <input type="text" name="std_address"  class="form-control" rows="3">
                  </textarea>
                </div>
                <div class="form-group">
                  <label>City:</label>
                  <input  type="text" name="std_city" class="form-control">
                </div>
                <div class="form-group">
                  <label>Role:</label>
                  <select name="std_type" class="form-control" >
                    <option value="Current student">Current student</option>
                    <option value="Allumni student">Allumni student</option>
                    <option value="Staff/faculty">Staff/faculty</option>
                  </select>
                </div>
              
                <button type="submit" name="btn_submit" class="btn btn-primary btn-lg">Submit</button>
                 <button type="cancel" onclick="window.location.href='admin_dashboard.php'" name="btn_cancel" class="btn btn-primary btn-lg">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
</body>
</html>
