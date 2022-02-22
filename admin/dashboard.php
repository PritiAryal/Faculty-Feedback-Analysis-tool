<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:index.php');
}
include('../dbconfig.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    .nav  li a {
   color: rgba(255,255,255,1);
   text-shadow:1px 1px 4px #66CCFF, 0 0 30px black, 0 2px 5px black;
   text-align:left;
 }

.nav a:hover {
 color: rgba(0,0,0,0.8);
  text-shadow:1px 1px 4px #66CCFF, 0 0 30px black, 0 2px 5px white;
}

</style>
</head>

<body>

    <div id="wrapper" style="background-color: rgba(93, 188, 210,0.3);color:black;">

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0;background-color: rgba(93, 188, 210,0.3);">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  style="color:rgba(0,0,0,0.8);font-size:1.5rem;text-shadow:1px 1px 4px #66CCFF, 0 0 30px black, 0 2px 5px white;"href="dashboard.php">
                Feedback Analysis Tool</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" align="right">
                <!-- /.dropdown -->
                <li class="dropdown dropleft">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user" style="text-shadow:1px 1px 4px #66CCFF, 0 0 30px black, 0 0 5px white;background: rgba(93, 188, 210,0.4)">
                        
                        <li><a href="dashboard.php?info=update_password"><i class="fa fa-gear fa-fw"></i>Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar sidebar" role="navigation" style="background-color: rgba(93, 188, 210,0.1);">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav"  id="side-menu" style="background-color: rgba(93, 188, 210,0.1);font-size: 1.2rem;">
                        
                        <li>
                                <img src="../images/black n white1.png" height="100vh" class="center-block" width="Auto"alt="logo" style="padding-top: 0.4rem;opacity:0.8;"> 
                        </li>
                        <li>
                            <a style="text-align:center;background-color: rgba(93, 188, 210,0.4);"href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
						<li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Faculty<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="dashboard.php?info=add_faculty" style="border-top: 0.2px solid #e7e7e7;"><i class="fa fa-plus fa-fw"></i> Add Faculty</a>
                                </li>
								 <li>
                                    <a href="dashboard.php?info=show_faculty"style="border-bottom: 0.2px solid #e7e7e7;"><i class="fa fa-eye"></i> Manage faculty</a>
                                </li>                         
							</ul>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        
						
						<li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Student<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
								 <li>
                                    <a href="dashboard.php?info=display_student"style="border-top: 0.2px solid #e7e7e7;border-bottom: 0.2px solid #e7e7e7;"><i class="fa fa-eye"></i> Manage Student</a>
                                </li> 
							             
							</ul>
                        </li>
						
						
		
		<!-- feedback-->
        <li>
                            <a href="#"><i class="fa fa-user fa-book"></i> Feedback<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="dashboard.php?info=feedback" style="border-top: 0.2px solid #e7e7e7;"><i class="fa fa-eye"></i> Feedback</a>
                                </li>
                                 <li>
                                    <a href="dashboard.php?info=average"style="border-bottom: 0.2px solid #e7e7e7;"><i class="fa fa-calculator"></i> Feedback Average</a>
                                </li>                         
                            </ul>
                            
                            <!-- /.nav-second-level -->
                        </li>

		
	 
				
		<!--feedback end-->
						
					
						
						
		<li>
			<a href="dashboard.php?info=contact"><i class="fa fa-envelope"></i> Contact us</a>
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
                    <!-- slider start -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 3rem;margin-bottom: 3rem;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img class="fill"src="../images/feedback11.jpg" style="width:100%;max-height: 285px;">
        <div class="carousel-caption">
          <h3>Faculty feedback analysis</h3>
          <p>Learn in positive atmosphere.</p>
        </div>
      </div>

      <div class="item">
        <img class="fill" src="../images/feedback6.jpg" style="width:100%;max-height: 285px;">
        <div class="carousel-caption">
          <h3>Faculty feedback analysis</h3>
          <p>Learn in positive atmosphere.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- slider --> 
                   
                	<?php 
								@$id=$_GET['id'];
								@$info=$_GET['info'];
								if($info!="")
								{
									if($info=="add_faculty")
										{
											include('add_faculty.php');
										}
										
									elseif($info=="show_faculty")
										{
											include('show_faculty.php');
										}
										
										
									elseif($info=="edit_faculty")
										{
											include('edit_faculty.php');
										}	
										
									elseif($info=="display_student")
										{
											include('display_student.php');
										}
									
										
										
									elseif($info=="contact")
										{
											include('contact.php');
										}	
									elseif($info=="feedback")
										{
											include('feedback.php');
										}
										elseif($info=="average")
										{
											include('feedback_average.php');
										}		
										
										
									
										
										
										
										else if($info=="update_password")
										{
										include('update_password.php');
										}
									
								}
								else
								{
								include('dashboard_home.php');
								}
							
							
							?>
				
				</div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../css/jquery.js"></script>
    <script src="../css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
