<?php
ob_start();
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
/*@import url('https://fonts.googleapis.com/css2?family=Gotu&family=Raleway:wght@300&display=swap');*/
.nav.navbar-nav li a {
   color: rgba(255,255,255,1);
   text-shadow:1px 1px 4px #66CCFF, 0 0 30px black, 0 2px 5px black;
 }

.nav.navbar-nav a:hover {
 color: grey;
  text-shadow:1px 1px 4px #66CCFF, 0 0 30px black, 0 2px 5px white;
}
</style>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation" style="background: rgba(93, 188, 210,0.3);bottom-margin:0px;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-left" height=0px>
                <a href="index.php"><img src="images/black n white1.png" height="55vh" width="Auto"alt="logo"></a>
                 <a href="index.php" style="color:#ffffff;font-size:1.4vw;text-shadow:1px 1px 4px black, 0 0 30px #66CCFF, 0 0 5px black">FACULTY FEEDBACK ANALYSIS TOOL</a>
                
            </div>
        </div>
    </nav>

		<!-- slider start -->
    <header id="myCarousel" class="carousel slide">
				
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/feedback11.jpg');"></div>
				<div class="carousel-caption">
          <p>Learn in positive atmosphere.</p>
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/feedback6.jpg');"></div>
                <div class="carousel-caption">
          <p>Learn in positive atmosphere.</p>
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/feedback11.jpg');"></div>
                <div class="carousel-caption">
          <p>Learn in positive atmosphere.</p>
                </div>
            </div>

			 <div class="item">
                <div class="fill" style="background-image:url('images/feedback6.jpg');"></div>
                <div class="carousel-caption">
          <p>Learn in positive atmosphere.</p>
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->	
	  		

  <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation" style="background: rgba(93, 188, 210,0.3);
"><!--#66CCFF-->
        <div class="container" >
        	 <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
         </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-center  navbar-static-top nav-fill w-100 text-uppercase"style="font-size: 0.9vw;letter-spacing: 0.2em; font-weight:bold;">
                    
					 <li style="color:#FFFFFF">
                        <a
" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					<li style="color:#FFFFFF">
                        <a href="index.php?info=about"><i class="fa fa-home fa-fw"></i>About</a>
                    </li>
					
					<li><a href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
				
				
								
	<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="text-shadow:1px 1px 4px #66CCFF, 0 0 30px black, 0 0 5px white;background: rgba(93, 188, 210,0.4)">
          
          <li><a href="index.php?info=login">Student</a></li>
		  <li><a href="index.php?info=faculty_login">Faculty</a></li> 
          <li><a href="index.php?info=admin">Admin</a></li> 
        </ul>
      </li> 
	  
	
	  
	  
	 <li>
                        <a href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  			

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }

                         else if($info=="admin")
                         {
                         include('admin/index.php');
                         }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		
	
	
    <!-- Page Content -->
    <div class="container">
        <div class="row">	
			<div class="col-lg-12" style="margin-top:60px;margin-bottom:80px" align="justify">
                    <!-- Card -->
                <div class="card" style="background-color: #f1f1f1;padding: 2rem;">
        <!-- Card body -->
                <div class="card-body" style="background-color: #f1f1f1">
				<br>
                <h4 align="center">Improve Learning with a Faculty Feedback Analysis Tool</h4>
                <br>
        <hr style="border:1px solid rgba(93, 188, 210,0.3);">
                
                <p>It is a new concept in the Education System of Nepal, that can actually help the students review their 
                faculties using their unique ID and Passwords. The system allows the students to actually go into depths of their
                faculty teachers and rank them based on various criterias. The aim of the system is to allow the students to
                ethically analyse how the teacher performs so that the quality of their education can improve. The educational institute can also review how the teacher has been performing in order to develop or motivate them into doing better.</p><br> 

                <p align="center">Please login to the respective accounts with correct credentials.<br>
                 New to Bidhya? Create an account now. Click <a href="index.php?info=registration"> Here </a> to get started.</p>
                 <p>It is a new concept in the Education System of Nepal, that can actually help the students review their 
                faculties using their unique ID and Passwords. The system allows the students to actually go into depths of their
                faculty teachers and rank them based on various criterias. The aim of the system is to allow the students to
                ethically analyse how the teacher performs so that the quality of their education can improve. The educational institute can also review how the teacher has been performing in order to develop or motivate them into doing better.</p><br> 

                <p align="center">Please login to the respective accounts with correct credentials.<br>
                 New to Bidhya? Create an account now. Click <a href="index.php?info=registration"> Here </a> to get started.</p><p>It is a new concept in the Education System of Nepal, that can actually help the students review their 
                faculties using their unique ID and Passwords. The system allows the students to actually go into depths of their
                faculty teachers and rank them based on various criterias. The aim of the system is to allow the students to
                ethically analyse how the teacher performs so that the quality of their education can improve. The educational institute can also review how the teacher has been performing in order to develop or motivate them into doing better.</p><br> 

                <p align="center">Please login to the respective accounts with correct credentials.<br>
                 New to Bidhya? Create an account now. Click <a href="index.php?info=registration"> Here </a> to get started.</p>
	           </div>
           </div>
			</div>
				<?php }  ob_end_flush();  ?>
            </div>
            
    </div>
    <!-- /.container -->
	

    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
