<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_student.php?id='+id;
     }
}
</script>	

<div class="col-sm-12">
    <div class="row" style="margin:0;">
        <h4>Student: Manage</h4>
        <hr>                          
    <div class="table-responsive">
    <table class="table table-condensed table-striped table-hover" align="center"style="letter-spacing: 0">
    <thead class="thead-inverse">
	<tr>
	<div class="form-group">
<?php
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th>Mobile</th>";
	echo "<th>Programme</th>";
	echo "<th>Semester</th>";
	echo "<th>Regid Id</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	?>
</div>
</tr>
</thead>
<tbody>
	<?php
	$i=1;
	$que=mysqli_query($conn,"select * from user");
	
	while($row=mysqli_fetch_array($que))
	{
		?>
		<tr>
		<div class="form-group">
		<?php
		echo "<td>".$i."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['programme']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['regid']."</td>";
		
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:black;></span></a></td>";
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