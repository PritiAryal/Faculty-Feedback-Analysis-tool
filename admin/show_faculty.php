<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_faculty.php?id='+id;
     }
}
</script>	

 <div class="col-sm-12">
    <div class="row" style="margin:0;">
        <h4>Faculty: Manage</h4>
        <hr>                          
    <div class="table-responsive">
    <table class="table table-condensed table-striped table-hover" align="center"style="letter-spacing: 0">
    <thead class="thead-inverse">
	<tr>
	<div class="form-group">
	<?php
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	echo "<th>Designation</th>";
	echo "<th>Programme</th>";
	echo "<th>Semester</th>";
	echo "<th>UserName</th>";	
	echo "<th>Email</th>";
	echo "<th>Mobile</th>";
	echo "<th>Password</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "<th>Status</th>";
	?>
	</div>
	</tr>
	</thead>
	
	<tbody>
     <?php                                      
	$i=1;
	$que=mysqli_query($conn,"select * from faculty");
	
	while($row=mysqli_fetch_array($que))
	{
		?>
		<tr>
		<div class="form-group">
		<?php 
		echo "<td>".$i."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['designation']."</td>";
		echo "<td>".$row['programme']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['user_alias']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_faculty'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:black;></span></a></td>";
		
		
		
		if($row['status'])
		{
		echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:black;></span></a></td>";
		}
		else
		{
		echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:green;></span></a></td>";
		}
		?>
		</div>
		</tr>
		<?php
		$i++;
	}
	
?>
</tbody>
</table>
</div>
</div>
</div>