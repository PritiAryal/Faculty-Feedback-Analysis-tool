<?php
extract($_POST);
include('../dbconfig.php');
if(isset($update_password))
{
	
	$que=mysqli_query($conn,"select pass from admin");
	$row=mysqli_fetch_array($que);
    $pass=$row['pass'];
	if($op!=$pass)
		{
		$err="<font color='red'>You Enterd wrong old password</font>";
		}
		
	elseif($np!=$cp)
		{
		$err="<font color='red'>New Password and confirm password must be same</font>";
		}
	else
	{
		mysqli_query($conn,"update admin set pass='$cp'");
		$err="<font color='green'>Password have been Changed successfully !!</font>";
	}

}

?>
<h4 class="page-header">Update: Admin</h4>
<div class="col-md-8">
	<!-- Card -->
		  <div class="card" style="background-color: #f1f1f1">
        <!-- Card body -->
      <div class="card-body" style="background-color: #f1f1f1">
      	<div class="row">
      		<div class="col-md-1"></div>
      		<div class="col-md-10">
<form method="post">
						<div class="row">
<div class="col-sm-12"><?php echo @$err;?></div>
</div>
<hr style="border:1px solid rgba(93, 188, 210,0.3);">
	
<div class="row" style="margin-top:10px">
	<div class="col-sm-4">Old Password:</div> 
	<div class="col-sm-8">
    <input type="password" name="op" value="" placeholder="enter your old password" class="form-control" required/>
</div>
</div>
	
<div class="row" style="margin-top:10px">
	<div class="col-sm-4">New Password:</div>
	<div class="col-sm-8">
    <input type="password" name="np" value="" placeholder="enter your new password" class="form-control"  required/>
</div>
</div>
 
<div class="row" style="margin-top:10px">
	<div class="col-sm-4">Confirm Password:</div>
	<div class="col-sm-8">
    <input type="password" name="cp" value=""  placeholder="re-enter your new password" class="form-control" required/>
</div>
</div>
<hr style="border:1px solid rgba(93, 188, 210,0.3);">
<div class="row">
	<div class="col-sm-6"><input type="submit" value="Update Password" name="update_password" class="btn btn-info" style="opacity:0.9;"/></div>
</div>
<hr>
</form>
</div>
</div>
</div>
</div>
<hr>
</div>
