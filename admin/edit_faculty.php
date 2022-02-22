<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update faculty set Name='$n',designation	='$desg',programme='$prg',semester='$sem',mobile='$mob',	password='$pass' where id='".$_GET['id']."'");	

$err="<font color='green'>Faculty Details updated</font>";

	}

$con=mysqli_query($conn,"select * from faculty where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h4 class="page-header">Update: Faculty</h4>
<div class="col-md-8">
    <!-- Card -->
          <div class="card" style="background-color: #f1f1f1">
        <!-- Card body -->
      <div class="card-body" style="background-color: #f1f1f1">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
	<form method="post">
	
	<fieldset>
        <div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
        <hr style="border:1px solid rgba(93, 188, 210,0.3);"><!-- #5dbcd2 -->
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$res['Name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Designation:</label>
            	<input type="text" value="<?php echo @$res['designation'];?>" name="desg" class="form-control" required>
        </div>
   	</div>
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$res['email'];?>"  name="email" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
          <input type="text" value="<?php echo @$res['password'];?>"  name="pass" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Programme:</label>
  <input type="text"  name="prg" value="<?php echo @$res['programme'];?>" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Semester</label>
  <input type="text"  name="sem" value="<?php echo @$res['semester'];?>" class="form-control" required>
        </div>
    </div>
                  
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php echo @$res['mobile'];?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>
        <hr style="border:1px solid rgba(93, 188, 210,0.3);"><!-- #5dbcd2 -->
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-info btn-block" name="save" value="Update  Faculty"style="opacity: 0.9;">
        </div>
  	</div>

</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>