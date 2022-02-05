<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Event</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() {
	   			$( "#shootdate" ).datepicker({
                    dateFormat: 'dd-mm-yy',
	   				minDate: 0
	   			});
	  		});
              $( function() {
	   			$( "#showdate" ).datepicker({
                       dateFormat: 'dd-mm-yy',
	   				minDate: 0
	   			});
	  		});
	  	</script>
</head>
<body>
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:admimlogin.php");
}
?>

<?php include('topbar.php'); ?>
    <center>
   <div style="width:1000px; height:700px; box-shadow:-10px 10px 5px #CCC">
       <div style="width:200px; float:left;">
       <?php include('left.php'); ?>
       </div>
       <div style="width:800px;float:left">
<br /><br />

<?php include('function.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="update events set name='" .$_POST["t2"] . "',details='". $_POST["t3"] ."',startdate='". $_POST["d1"] ."',enddate='". $_POST["d2"] ."' where id='" . $_POST["s2"] ."'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
}

?>
       <form method="post">
<table border="0" align="center" width="400" height="300px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd">Update Events</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Select Event</td><td><select name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from events";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



</select>
<input type="submit" value="Show" name="show" formnovalidate="formnovalidate" />
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from events where id='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$id=$data[0];
	$name=$data[1];
    $details=$data[2];
    $sdate=$data[3];
    $edate=$data[4];
		
		
	mysqli_close($cn);
}
?>

</td></tr>
<tr><td class="lefttd">Event Title</td><td><input type="text" name="t2" value= "<?php  if(isset($_POST["show"])){ echo $name ;}  ?>"  required="required" pattern="[a-zA-Z0-9]{3,10}" title="please enter only character and numbers between 3 to 10 for password"   /></td></tr>
<tr><td class="lefttd">Start Date</td><td><input type="text" id="shootdate" name="d1" value= "<?php  if(isset($_POST["show"])){ echo $sdate ;}?>"  required="required" title="please enter only character and numbers between 3 to 10 for password"/></td></tr>
<tr><td class="lefttd">End Date</td><td><input type="text" id="showdate" name="d2"   value= "<?php  if(isset($_POST["show"])){ echo $edate ;}?>" required="required"  title="please enter only character and numbers between 3 to 10 for password"/></td></tr>
<tr><td class="lefttd">Event Details</td><td><input type="text" name="t3"  value= "<?php  if(isset($_POST["show"])){ echo $details ;}?>"  required="required"  title="please enter only character and numbers between 3 to 10 for password"/></td></tr>

<tr><td>&nbsp;</td><td><input type="submit" value="UPDATE" name="sbmt"  style="border:0px; background:linear-gradient(blue,blue); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
</table>
</form>
       </div>

   </div>
    </center>
<?php include('bottom.php'); ?>
   
</body>
</html>