<?php 
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
		$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		$op=md5($op);	

		$sql=mysqli_query($conn,"select * from user where pass='$op'");
		$r=mysqli_num_rows($sql);
		if($r==true)
		{

			if($np==$cp)
			{
				$np=md5($np);
				$sql=mysqli_query($conn,"update user set pass='$np' where email='$user'");

				$err="<font color='blue'>Password updated </font>";
			}
			else
			{
				$err="<font color='red'>New  password not matched with Confirm Password </font>";
			}
		}

		else
		{

			$err="<font color='red'>Wrong Old Password </font>";

		}
	}
}

?>
<h4>Update: Password</h4>
<hr>
<div class="col-lg-8">
	<!-- Card -->
	<div class="card" style="background-color: #f1f1f1">
		<!-- Card body -->
		<div class="card-body" style="background-color: #f1f1f1">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form method="post">
						<hr style="border:1px solid rgba(93, 188, 210,0.3);">

						<div class="row">
							<div class="col-sm-12"><?php echo @$err;?></div>
						</div>



						<div class="row" style="margin-top:10px">
							<div class="col-sm-4">Old Password</div>
							<div class="col-sm-8">
								<input type="password" name="op" class="form-control"/></div>
							</div>

							<div class="row" style="margin-top:10px">
								<div class="col-sm-4">New Password</div>
								<div class="col-sm-8">
									<input type="password" name="np" class="form-control"/></div>
								</div>

								<div class="row" style="margin-top:10px">
									<div class="col-sm-4">Confirm Password</div>
									<div class="col-sm-8">
										<input type="password" name="cp" class="form-control"/></div>
									</div>
									<hr style="border:1px solid rgba(93, 188, 210,0.3);">
									<div class="row" style="margin-top:10px">


										<div class="col-sm-6">
											<input type="submit" value="Update Password" name="save" class="btn btn-block btn-info" style="opacity: 0.9;"/>
										</div>
										<div class="col-sm-6">
											<input type="reset" class="btn btn-block btn-info" style="opacity: 0.9;"/>
										</div>
										<hr>

									</div>
								</form>	
							</div>
						</div>
					</div>
				</div>
				<hr>
			</div>