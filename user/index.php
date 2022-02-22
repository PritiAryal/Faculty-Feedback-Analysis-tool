<?php 
session_start();
include('../dbconfig.php');
$user= $_SESSION['user'];
if($user=="")
{header('location:../index.php');}
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
//print_r($users);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Faculty feedback System</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

       <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--     <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
<!--     <link href="../css/dashboard.css" rel="stylesheet"> -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
        <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <style type="text/css">
    .nav  li a {
   color: rgba(255,255,255,1);
   text-shadow:1px 1px 4px #66CCFF, 0 0 30px black, 0 2px 7px black;
   text-align:left;
 }

.nav a:hover,.color:hover{
 color: rgba(0,0,0,0.8);
  text-shadow:1px 1px 4px #66CCFF, 0 0 30px black, 0 2px 5px white;
}

</style>
  </head>

  <body>
     <div id="wrapper" style="background-color: rgba(93, 188, 210,0.3);color:black;">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color: rgba(93, 188, 210,0.3);">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  style="color:rgba(0,0,0,0.8);font-size:1.5rem;text-shadow:1px 1px 4px #66CCFF, 0 0 30px black, 0 2px 5px white;"href="index.php">
                Feedback Analysis Tool</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" align="right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user" style="text-shadow:1px 1px 4px #66CCFF, 0 0 30px black, 0 0 5px white;background: rgba(93, 188, 210,0.4)">
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
                        <li><a href="index.php"style="text-align: center;background-color: rgba(93, 188, 210,0.4);" class="text-uppercase">Hello <?php echo $users['name'];?> <span class="sr-only">(current)</span></a></li>
                        
                <!-- check users profile image -->
                      <?php 
                      $q=mysqli_query($conn,"select image from user where email='".$_SESSION['user']."'");
                      $row=mysqli_fetch_assoc($q);
                      if($row['image']=="")
                      {
                      ?>
                            <li><a href="#"><img class="center-block"style="border-radius:50px" src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
                      <?php 
                      }
                      else
                      {
                      ?>
                      <li><a href="#"><img class="center-block"style="border-radius:50px" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="not found"/></a></li>
                      <?php 
                      }
                      ?>
                    <li><a style="padding-left: 5rem;"href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
                   <li><a style="padding-left: 5rem;" href="index.php?page=update_profile"><span class="glyphicon glyphicon-user"></span>  Update Profile</a></li>
                   <li><a style="padding-left: 5rem;"href="index.php?page=feedback"><i class="fa fa-user fa-book"></i> Feedback</a></li>
 
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
    @$page=  $_GET['page'];
      if($page!="")
      {
        if($page=="update_password")
      {
        include('update_password.php');
      
      }
      
        if($page=="update_profile")
      {
        include('update_profile.php');
      
      }
      if($page=="feedback")
      {
        include('give_feedback.php');
      
      }
      }
      else
      {
      
      ?>
      
      <div class="col-md-12">
    <h4 >Dashboard</h4>
    <hr>
       <!-- Card -->
     <div class="card">
      <div class="card-body" >
            <!-- Table -->
            <table class="table table-light table-bordered table-hover">
                <tr class="float-right">
                  <img style="border-radius:50px" src="../images/<?php echo $_SESSION['user'];?>/<?php echo $users['image'];?>" width="30" height="30" class="img-thumbnail rounded-circle"alt="not found"/><a style="color: black;"> Information </a>
                </tr>
                <hr>
                <tr>
                  <th class="bg-info">Name</th>
                  <td class="greycolor"><?php echo $users['name'];?></td>
                </tr>
                 <tr>
                  <th class="bg-info">Email Address</th>
                  <td class="greycolor"><?php echo $users['email'];?></td>
                </tr>
                <tr>
                  <th class="bg-info">Phone</th>
                  <td class="greycolor"><?php echo $users['mobile'];?></td>
                </tr>
                 <tr>
                  <th class="bg-info">Gender</th>
                  <td class="greycolor">
                 <span class="text-success"><?php echo $users['gender'];?></span>
                  </td>
                </tr>
                <tr>
                  <th class="bg-info">Date Of Birth</th>
                  <td class="greycolor"><?php echo $users['dob'];?></td>
                </tr>
                <tr>
                  <th class="bg-info">Semester</th>
                  <td class="greycolor"><?php echo $users['semester'];?></td>
                </tr>
                 <tr>
                  <th class="bg-info">Programme</th>
                  <td class="greycolor"><?php echo $users['programme'];?></td>
                </tr>
                <tr>
                  <th class="bg-info">Hobbies</th>
                  <td class="greycolor"><?php echo $users['hobbies'];?></td>
                </tr>
             </table>
            <!-- /.Table -->
          </div>
      </div>
       <!-- /.Card -->
   </div>
   </div>
      
<?php } ?>
        
        
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
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    

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
