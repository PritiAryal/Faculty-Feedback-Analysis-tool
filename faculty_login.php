<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from faculty where email='$e' and password='$p'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['faculty_login']=$e;
header('location:http://localhost/onlinefeedback/faculty/index.php');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Faculty: Please Sign in</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            <?php echo @$err;?>
                        </p>
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="e" type="email" autofocus required placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="p" type="password" required>
                                </div>
                                
                                
								<div class="form-group">
                                    <input name="save" type="submit" value="Login" class="btn btn-lg btn-info btn-block">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>