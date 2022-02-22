<?php 
  require_once('SentimentAnalyzer.php');
  $sat = new SentimentAnalyzerTest(new SentimentAnalyzer());

  $sat->trainAnalyzer('../trainingSet/data.neg', 'negative', 5000); //training with negative data
  $sat->trainAnalyzer('../trainingSet/data.pos', 'positive', 5000); //trainign with positive data


extract($_POST);
if(isset($sub))
{
$user=$_SESSION['user'];

$sql=mysqli_query($conn,"select * from feedback where student_id='$user' and faculty_id='$faculty'");
$r=mysqli_num_rows($sql);

if($r==true)
{
$failed = "You have already given feedback to this faculty.";
/*echo "<h2 style='color:red'>You already given feedback to this faculty</h2>";*/
}
else
{
  $value=$_POST['quest13'];
  $type = (isset($_POST['quest13'])) ? 'sentence' : 'location';
        if ($type == 'sentence')
        {
          $result = $sat->analyzeSentence($value);
        }
        // print_r($result);
  $sentiment =  $result['sentiment'];
  $postive_accuracy = $result['accuracy']['positivity'];
  $negative_accuracy = $result['accuracy']['negativity'];
  // echo $sentiment;
  // echo $postive_accuracy;
  // echo $negative_accuracy;

  // call algorithm and store that in variable to store in database
$query="insert into feedback values('','$user','$faculty','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11','$quest12','$quest13','$sentiment','$postive_accuracy','$negative_accuracy',now())";
//echo $query;
        // die('bgfvdsui');

mysqli_query($conn,$query);
$success = "Thank You!";
/*echo "<h2 style='color:green'>Thank you </h2>";*/
}
}


?>
<div class="col-sm-12">
    <div class="row" style="margin:0;">
        <h3>Add: Feedback</h3>
        <hr style="border:1px solid rgba(93, 188, 210,0.3);"><!-- #5dbcd2 -->
          <?php if(isset($success)){ ?>
            <p class="alert alert-success"><?php echo $success; ?></p>
     <?php } ?>
          <?php if(isset($failed)){ ?>
            <p class="alert alert-danger"><?php echo $failed; ?></p>
     <?php } ?>
<form method="post" style="font-size: 1.2rem;">

<fieldset>

<h5 align="center">Please give your feedback</h5>



<div class="row" style="margin:0;">
            <table class="table table-light  table-condensed">
<tr>

<th> Select Faculty :</th>
<td>
<select name="faculty" class="form-control">
	<?php
$sql=mysqli_query($conn,"select * from faculty where semester='".$users['semester']."'");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value='".$r['email']."'>".$r['Name']."</option>";
	}
		 ?>
</select>
</td>
</tr>
</table>
</div>


            <!-- Table -->
            <div class="row" style="margin:0;">
            <table class="table table-light table-bordered table-hover table-condensed">
              <tr class="float-right">

<h4>Course Material</h4>
</tr>
<tr>
<th class="bg-info"><b>1:</b> Teacher provided course having weekly content plan with list of required textbook:</th>  
<td><input type="radio" name="quest1" value="5" required> 5
  <input type="radio" name="quest1" value="4">4
  <input type="radio" name="quest1" value="3">3
<input type="radio" name="quest1" value="2">2
<input type="radio" name="quest1" value="1">1</td>
</tr>
  
<tr>
<th class="bg-info"><b>2:</b>Course objectives,learning outcomes and grading criteria are clear to me:</th> 
<td><input type="radio" name="quest2" value="5" required>5
  <input type="radio" name="quest2" value="4">4
  <input type="radio" name="quest2" value="3">3
<input type="radio" name="quest2" value="2">2
<input type="radio" name="quest2" value="1">1</td>
</tr>

<tr>
<th class="bg-info"><b>3:</b>Course integrates throretical course concepts with the real world examples:</th> 
<td>
<input type="radio" name="quest3" value="5" required> 5
  <input type="radio" name="quest3" value="4">4
  <input type="radio" name="quest3" value="3">3
<input type="radio" name="quest3" value="2">2
<input type="radio" name="quest3" value="1">1</td>
</tr>
</table>
</div>
       <hr>

            <!-- Table -->
            <div class="row" style="margin:0;">
            <table class="table table-light table-bordered table-hover table-condensed table-striped ">
              <tr class="float-right">
<h4>Class Teaching</h4>
</tr>
<tr>
<th class="bg-info"><b>4:</b> Teacher is punctual,arrives on time and leaves on time:</th>
<td> <input type="radio" name="quest4" value="5" required> 5
  <input type="radio" name="quest4" value="4">4
  <input type="radio" name="quest4" value="3">3
<input type="radio" name="quest4" value="2">2
<input type="radio" name="quest4" value="1">1
</td>
</tr>

<tr>
<th class="bg-info"><b>5:</b>Teacher is good at stimulating the interest in the course content:</th>
<td> 
<input type="radio" name="quest5" value="5" required> 5
<input type="radio" name="quest5" value="4">4
  <input type="radio" name="quest5" value="3">3
<input type="radio" name="quest5" value="2">2
<input type="radio" name="quest5" value="1">1</td>
</tr>
<tr>
<th class="bg-info"><b>6:</b> Teacher is good at explaining the subject matter:</th>
<td>
 <input type="radio" name="quest6" value="5" required> 5
  <input type="radio" name="quest6" value="4">4
  <input type="radio" name="quest6" value="3">3
<input type="radio" name="quest6" value="2">2
<input type="radio" name="quest6" value="1">1</td>
</tr>

<tr>
<th class="bg-info"><b>7:</b> Teacher's presentation was clear,loud ad easy to understand:</th>
<td> <input type="radio" name="quest7" value="5" required> 5
  <input type="radio" name="quest7" value="4">4
  <input type="radio" name="quest7" value="3">3
<input type="radio" name="quest7" value="2">2
<input type="radio" name="quest7" value="1">1</td>
</tr>
<tr>
<th class="bg-info"><b>8:</b>Teacher is good at using innovative teaching methods/ways:</th>
<td> 
<input type="radio" name="quest8" value="5" required> 5
  <input type="radio" name="quest8" value="4">4
  <input type="radio" name="quest8" value="3">3
<input type="radio" name="quest8" value="2">2
<input type="radio" name="quest8" value="1">1</td>
</tr>
<tr>
<th class="bg-info"><b>9:</b>Teacher is available and helpful during counseling hours:</th> 
<td><input type="radio" name="quest9" value="5" required>5
  <input type="radio" name="quest9" value="4">4
  <input type="radio" name="quest9" value="3">3
<input type="radio" name="quest9" value="2">2
<input type="radio" name="quest9" value="1">1</td>
</tr>
<tr>
<th class="bg-info"><b>10:</b> Teacher has competed the whole course as per course outline:</th>
<td>
 <input type="radio" name="quest10" value="5" required> 5
  <input type="radio" name="quest10" value="4">4
  <input type="radio" name="quest10" value="3">3
<input type="radio" name="quest10" value="2">2
<input type="radio" name="quest10" value="1">1</td>
</tr>
</table>
</div>

       <hr>
       
            <!-- Table -->
            <div class="row" style="margin:0;">
    
            <table class="table table-light table-bordered table-hover table-condensed table-striped ">
              <tr class="float-right">
<h4>Class Assessment</h4>
</tr>
<tr>
<th class="bg-info"><b>11:</b>Teacher was always fair and impartial:</th>
<td>
 <input type="radio" name="quest11" value="5" required>5
  <input type="radio" name="quest11" value="4">4
  <input type="radio" name="quest11" value="3">3
<input type="radio" name="quest11" value="2">2
<input type="radio" name="quest11" value="1">1</td>
</tr>
<tr>
<th class="bg-info"><b>12:</b>Assessments conducted are clearly connected to maximize learining objectives:</th>
<td>
 <input type="radio" name="quest12" value="5" required> 5
  <input type="radio" name="quest12" value="4">4
  <input type="radio" name="quest12" value="3"> 3
<input type="radio" name="quest12" value="2">2
<input type="radio" name="quest12" value="1">1</td>
</tr>
</table>
</div>

       <hr>
      
            <!-- Table -->
            <div class="row" style="margin:0;">
            <table class="table table-light table-bordered table-hover table-condensed table-striped ">
              <tr>
                <div class="form-group">
          <label for="Message"><b>13:</b>Thoughts on the faculty</label><br><br>
          <div class="row">
          <div class="col-md-12">
<center>
<textarea name="quest13" rows="5" id="comments" class="form-control"style="font-size:1.2em;">

</textarea></center></div></div><br><br>
</div>
</tr>
</table>
</div>

<hr>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-6">
    

<button type="button" style="font-size:7pt;color:black;background-color:#f1f1f1;padding:3px;border:2px solid #f1f1f1;"> Strongly Agree 5</button>
<button type="button" style="font-size:7pt;color:black;background-color:#edf9fa;padding:3px;border:2px solid #edf9fa">Agree 4 </button>
<button type="button" style="font-size:7pt;color:black;background-color:#d5f3f5;padding:3px;border:2px solid #d5f3f5;">Neutral 3</button>
<button type="button" style="font-size:7pt;color:black;background-color:#b2e9ed;padding:3px;border:2px solid #b2e9ed;">Disagree 2</button>
<button type="button" style="font-size:7pt;color:white;background-color:#555;padding:3px">Strongly Disagree 1</button>
</div>
  <div class="col-md-2"></div>
</div>
        <hr style="border:1px solid rgba(93, 188, 210,0.3);"><!-- #5dbcd2 -->

            <!-- Table -->
            <div class="row" style="margin:0;">
            <table class="table table-light table-bordered table-hover">
              <tr>
                <
                <div class="col-md-12">
<p align="center"><button type="submit" class="btn btn-info btn-lg" name="sub">Submit</button></p>
</div>
</tr>
</table>
</div>
<hr>
</fieldset>
</form>



<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
