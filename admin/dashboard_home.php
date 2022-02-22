
 <div class="col-md-12">
     <h4>Dashboard</h4>
     <hr>
     <!-- Card -->
<div class="card">
<div class="card-body">
<table class="table table-light table-bordered table-hover table-condensed table-striped">
          	<?php 
//all complaints
$qq=mysqli_query($conn,"select * from faculty ");
$rows=mysqli_num_rows($qq);		
?>
<tr><td class="bg-info"> <?php echo "Total Number of Faculty : $rows" ?></td></tr>


<?php 
//all users
$q2=mysqli_query($conn,"select * from feedback");
$r2=mysqli_num_rows($q2);			
?>
<tr><td class="table-info"> <?php echo "Total Number of feedback given by users  : $r2" ?></td></tr>	

<?php
//all emegency compalints
$q=mysqli_query($conn,"select * from user");
$r1=mysqli_num_rows($q);			
?>	
<tr><td class="bg-info"> <?php echo "Total Number of Student : $r1" ?></td></tr>

</table>
</div>
</div>

<!-- Card -->
<div class="card">
<div class="card-body" style="background-color: #f1f1f1">
<!-- Table -->
<table class="table table-light  table-hover">
<tr>
<td><h4><img style="border-radius:50px" src="../images/black n white1.png" width="40" height="30" class="img-thumbnail rounded-circle"alt="not found"/>
Students </h4></td>
<td><a style="float: right;color: black;">Total:<?php echo "$r1" ?></a></td>
</tr>
</table>
						<hr style="border:1px solid rgba(93, 188, 210,0.3);"><!-- #5dbcd2 -->

<div class="row placeholders" style="padding:2rem;align-items: center;">
	<?php 
$result=mysqli_query($conn,"select * from user"); 

while($row_notice = mysqli_fetch_array($result)){
            $image = $row_notice['image'];
            $name = $row_notice['name']; 
            $semester = $row_notice['semester']; 
            $email = $row_notice['email'];     
            ?>
<div class="col-xs-6 col-sm-3 square placeholder">
<img src="../images/<?php echo $email;?>/<?php echo $image;?>"class="img-responsive" alt="Generic placeholder thumbnail"style="max-height:120">
<h4><?php echo $name;?></h4>
<span class="text-muted">Semester:<?php echo $semester;?></span>

</div>
<?php } ?>
</div>
<!-- /.Table -->
</div>
</div>
<hr>
<!-- /.Card -->
</div>

<!-- <h1 align="center" style="text-decoration:underline"><a href="">Admin Dashboard</a></h1> -->

