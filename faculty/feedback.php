<?php 
$q=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty_login']."'");
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
        window.location.href='delete_feedback.php?id='+id;
     }
}
</script>	


<div class="col-sm-12">
    <div class="row" style="margin:0;">
        <h4>Faculty: Feedback</h4>
        <hr>                          
    <div class="table-responsive">
    <table class="table table-condensed table-striped table-hover" align="center"style="letter-spacing: 0">
    <thead class="thead-inverse">
	<tr>
	
	<div class="form-group">
	
		<th>Sr.No</th>
		<th>Quest1</th>
		<th>Quest2</th>
		<th>Quest3</th>
		<th>Quest4</th>
		<th>Quest5</th>
		<th>Quest6</th>
		<th>Quest7</th>
		<th>Quest8</th>
		<th>Quest9</th>
		<th>Quest10</th>
		<th>Quest11</th>
		<th>Quest12</th>
		<th>Quest13</th>
		<th>Sentiment</th>
		</div>
		</tr>
		</thead>
		<tbody>
		<?php
		$i=1;
	while($row=mysqli_fetch_array($q))
		{
			?>
		<tr>
		<div class="form-group">
		<?php		
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			echo "<td>".$row[13]."</td>";
			echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			//echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";
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