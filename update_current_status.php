<?php
session_start();
include("connection.php");

include("header.php");


?>



<div class="row">
  <div class="col-lg-7 bg-info" style="margin-left: 50px; background-color: #FFF; border: 1px #A448FF solid; margin-top: 20px;">
    <h3 style="margin: 20px; color:#A448FF; border-bottom: 1px #999999 solid;" align="center"> Update Status </h3>
      <div class="form-group">
                  <label>Company Name:</label>
                  <input type="text" name="company_name" class="form-control" required>
                </div>
                 <div class="form-group">
                  <label> Working Area:</label>
                  <input type="text" name="company_workarea" class="form-control" required>
                </div>
                 <div class="form-group">
                  <label>Working Position:</label>
                  <input type="text" name="company_position" class="form-control" required>
                </div>
                 <div class="form-group">
                  <label>Organization:</label>
                  <input type="text" name="company_organization" class="form-control" required>
                </div>
                 <div class="form-group">
                  <label>Salary</label>
                  <input type="text" name="company_salary" class="form-control" required>
                </div>
                <div style="margin-bottom:20px">
                   <button type="submit" name="btn_submit" class="btn btn-primary btn-lg">Update</button>
                                        </div>
      
      
    
    </form>
            </div>
           </div>
           
           
           
           
           
           
    
  </div>
</div>





</body>
</html>