<?php 
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$pro','$sem','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'><h5 align='center'>Registration successfull !!</h5></font>";

}
}




?>


		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<!-- Card -->
		<div class="card" style="background-color: #f1f1f1">
		<!-- Card body -->
		<div class="card-body" style="background-color: #f1f1f1">
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h2 align="center">Registration Form</h2>
		<form method="post" enctype="multipart/form-data">
		<hr style="border:1px solid rgba(93, 188, 210,0.3);">
	   <!-- #5dbcd2 -->
		<table class="table" style="margin-bottom:50px">
	<tr>
		<td colspan="2"><?php echo @$err;?></td>
	</tr>
				<tr>
					<td>Enter Your name</td>
					<td><input  type="text" name="n" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Enter Your Email Adress</td>
					<td><input type="email" name="e" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password</td>
					<td><input type="password" name="p" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Phone Number</td>
					<td><input type="text" name="mob" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Faculty</td>
					<td><select name="pro" class="form-control" required>
					
					<option>BSCCSIT</option>
					<option>BCA</option>
					<option>BSW</option>
					<option>BIM</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Select Your Semester</td>
					<td><select name="sem" class="form-control" required>
					
					<option>i</option>
					<option>ii</option>
					<option>iii</option>
					<option>iv</option>
					<option>v</option>
					<option>vi</option>
					<option>vii</option>
					<option>viii</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<td>
				Male<input type="radio" name="gen" value="m"/>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				<tr>
					<td>Choose Your hobbies</td>
					<td>
					Reading<input value="reading" type="checkbox" name="hob[]"/>
					Singing<input value="singin" type="checkbox" name="hob[]"/>
					
					Playing<input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr>
				
				
				<tr>
					<td>Upload  Your Image </td>
					<td><input type="file" name="img" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your DOB</td>
					<td>
					<select style="width:100px;float:left" name="yy" class="form-control" required>
					<option value="">Year</option>
					<?php 
					for($i=1980;$i<=2002;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select style="width:100px;float:left" name="mm" class="form-control" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select style="width:100px;float:left" name="dd" class="form-control" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
<td colspan="2" align="center">
<div class="row">
<hr style="border:1px solid rgba(93, 188, 210,0.3);">
</div>
<div class="row">
<div class="col-md-6">
<input type="submit" value="Save" class="btn  btn-block btn-info" name="save"/>
</div>
<div class="col-md-6">
<input type="reset" value="Reset" class="btn btn-block btn-info"/>
</div>			
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</div>
</div>
</div>
</div>
	</body>
</html>