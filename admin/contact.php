<?php 
$q=mysqli_query($conn,"select * from contact");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_contact.php?id='+id;
     }
}
</script>	


<div class="col-sm-12">
    <div class="row" style="margin:0;">
        <h4>Faculty: Contact</h4>
        <hr>                          
    <div class="table-responsive">
    <table class="table table-condensed table-striped table-hover" align="center"style="letter-spacing: 0">
    <thead class="thead-inverse">
	<tr>
	
	<div class="form-group">
		<th>Sr.No</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Message</th>
		<th>Delete</th>
	</div>
	</tr>
	</thead>
	<tbody>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_assoc($q))
		{
			?>
		<tr>
		<div class="form-group">	
		<?php	
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['mobile']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['message']."</td>";
			/*echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";*/
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
<?php }?>