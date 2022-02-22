<?php
	extract($_POST);
	if(isset($login))
	{
$que=mysqli_query($conn,"select user and pass from admin where user='$email' and pass='$pass'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
				$_SESSION['user']=$email;
				header('location:http://localhost/onlinefeedback/admin/dashboard.php');
			}
		else
			{
				$err="<font color='red'>Wrong Email or Password !</font>";
			}
	}
?>



    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin: Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                         <p>
                            <?php echo @$err;?>
                        </p>
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" autofocus required placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" required>
                                </div>
                                
                                
								<div class="form-group">
                                    <input name="login" type="submit" value="Login" class="btn btn-lg btn-info btn-block">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


