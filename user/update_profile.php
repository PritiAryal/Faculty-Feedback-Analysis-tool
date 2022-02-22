<?php 
extract($_POST);
if(isset($update))
{
//dob
	$dob=$yy."-".$mm."-".$dd;
//hobbies
	$hob=implode(",",$hob);

	$query="update user set name='$n',mobile='$mob',gender='$gen',hobbies='$hob',dob='$dob' where email='".$_SESSION['user']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
	mysqli_query($conn,$query);



	$err="<font color='blue'>Profie updated successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

?>
<h4 class="page-header">Update: Student</h4>
<div class="col-lg-8">
	<!-- Card -->
	<div class="card" style="background-color: #f1f1f1">
		<!-- Card body -->
		<div class="card-body" style="background-color: #f1f1f1">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">

					<form method="post">
						<hr style="border:1px solid rgba(93, 188, 210,0.3);"><!-- #5dbcd2 -->

						<table class="table" style="border: none;">
							<tr>
								<td colspan="2"><?php echo @$err;?></td>
							</tr>

							<tr>
								<td>Enter Your name</td>
								<Td><input class="form-control" value="<?php echo $res['name'];?>"  type="text" name="n"/></td>
								</tr>
								<tr>
									<td>Enter Your email </td>
									<Td><input class="form-control" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e"/></td>
									</tr>


									<tr>
										<td>Enter Your Mobile </td>
										<Td><input class="form-control" type="text" value="<?php echo $res['mobile'];?>"  name="mob"/></td>
										</tr>

										<tr>
											<td>Select Your Gender</td>
											<Td>
												Male<input type="radio" <?php if($res['gender']=="m"){echo "checked";} ?> name="gen" value="m"/>
												Female<input type="radio" <?php if($res['gender']=="f"){echo "checked";} ?> name="gen" value="f"/>	
											</td>
										</tr>

										<tr>
											<td>Choose Your hobbies</td>
											<Td>
												<?php 
												$arrr=explode(",",$res['hobbies']);
												?>


												Reading<input value="reading" <?php if(in_array("reading",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/>
												Singing<input value="singin" <?php if(in_array("singin",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/>
												Playing<input value="playing" <?php if(in_array("playing",$arrr)){echo "checked";} ?> type="checkbox" name="hob[]"/>
											</td>
										</tr>


										<tr>
											<td>Enter Your DOB</td>
											<?php 
											$arrr1=explode("-",$res['dob']);
											?>
											<Td>
												<select class="form-control" style="width:100px;float:left" name="yy">
													<option value="">Year</option>
													<?php 
													for($i=1950;$i<=2016;$i++)
													{
														?>
														<option <?php if($arrr1[0]==$i){echo "selected";} ?>><?php echo $i; ?></option>
													<?php }					
													?>

												</select>

												<select class="form-control" style="width:100px;float:left" name="mm">
													<option value="">Month</option>
													<?php 
													for($i=1;$i<=12;$i++)
													{
														?>
														<option <?php if($arrr1[1]==$i){echo "selected";} ?>><?php echo $i; ?></option>
													<?php }					
													?>
												}					
												?>

											</select>


											<select class="form-control" style="width:100px;float:left" name="dd">
												<option value="">Date</option>
												<?php 
												for($i=1;$i<=31;$i++)
												{
													?>
													<option <?php if($arrr1[2]==$i){echo "selected";} ?>><?php echo $i; ?></option>
												<?php }					
												?>
											}					
											?>

										</select>

									</td>
								</tr>


								<tr>


									<Td colspan="2" align="center">
										<div class="row">
											<hr style="border:1px solid rgba(93, 188, 210,0.3);">
										</div><!-- #5dbcd2 -->
										<div class="row">
											<div class="col-md-6">
												<input type="submit" class="btn btn-info btn-block" value="Update My Profile" name="update"/>
											</div>
											<div class="col-md-6">
												<input type="reset" class="btn btn-info btn-block" value="Reset"/>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
		<hr>
	</div>