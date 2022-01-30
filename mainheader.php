
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>College Alumni Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper" >
    <div class="row" style="background-color: #2F97FF; border-bottom: 4px #999999 solid;">
  <div class="col-lg-2 "> </div>
  <div class="col-lg-1 "> <img src="" width="100"> </div>
  <div class="col-lg-9 text-center">
    <h1 style="margin-top: 10px; color: #FFF; font-size: 60px; font-family: Georgia, 'Times New Roman', Times, serif; text-shadow: 5px 3px 3px #666666">COLLEGE ALLUMNI PORTAL </h1>
    <h3 style="color: #FFF; line-height: 1px; text-align: right">Type some details..... </h3>
  </div>
</div>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- /.navbar-header -->

           

            <div class="navbar-default sidebar" role="navigation">
                
				<img src="img/clg_logo11.png" height="200px"  style="margin-bottom:40px"/>
				
				
				
				<div class="sidebar-nav navbar-collapse ">
                 <ul class="nav" id="side-menu">
                        
                       
                        
                       
                        
                     
						<li>
                            <a href="Admin_create_post.php"><i class="fa fa-edit fa-fw"></i> Create Post</a>
                        </li>
                        <li>
                            <a href="Admin_view_post.php"><i class="fa fa-edit fa-fw"></i> View Post</a>
                        </li>
                          <li>
                            <a href="Admin_feedback.php"><i class="fa fa-edit fa-fw"></i> View Feedback</a>
                        </li>
                        <li style="margin:20px; text-align:center;"> 	
         <form action="index.php".php" method="post" >
                <input type="submit" value="Log Out" name="btn_logout" class="btn btn-danger"> 
         </form>
		</li>
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" > Popat Nagare</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-thumbs-up fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                
                                  <?php
										$astd=executeQuery("SELECT count(sr_no) as astdcount FROM registration WHERE std_type='Allumni student'");
										$as=@mysql_fetch_array($astd);
											?>
                              
                                    <div class="huge"><?php echo $as['astdcount'] ?></div>
                                    <div>Allumni Student</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"> View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                    
                                </div>
                                <div class="col-xs-9 text-right">
                                   <?php
										$cstd=executeQuery("SELECT count(sr_no) as cstdcount FROM registration WHERE std_type='Current Student'");
										$cs=@mysql_fetch_array($cstd);
											?>
                                    <div class="huge"><?php echo $cs['cstdcount'] ?></div>
                                    <div>Currect Students!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
               
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-graduation-cap fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                 <?php
										$apost=executeQuery("SELECT count(sr_no) as acount FROM post WHERE post_status='1'");
										$ap=@mysql_fetch_array($apost);
											?>
                                    <div class="huge"><?php echo $ap['acount'] ?></div>
                                    <div>Approved Post</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                
                                 <?php
										$rpost=executeQuery("SELECT count(sr_no) as rcount FROM post WHERE post_status='2'");
										$rp=@mysql_fetch_array($rpost);
											?>
                                    <div class="huge"><?php echo $rp['rcount'] ?></div>
                                    <div>Rejected Post!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

