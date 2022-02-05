<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apply Form</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script>
function myFunction() {
document.getElementById('demo').value= Date();
}
</script>

</head>

<body onload="myFunction()">

<?php

if($_SESSION['donorstatus']=="")
{
	header("location:../login.php");
}
?>
<?php include('function.php'); ?>
 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
		<h1><a href="index.php"><img src="Images/logo.png" alt=""  width="50%" height="120px"></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<ul class="nav">
		<li><a href="index.php">Home</a></li> 
		<li><a href="chngpwd.php">Change Password</a></li>	
			<li><a href="updateprofile.php">Update Profile</a></li>            
			<li><a href="apply.php">Apply</a></li>
            <li><a href="viewapply.php">View Apply</a></li>
            <li><a href="viewevent.php">View Events</a></li>
            <li><a href="logout.php">log Out</a></li>
           
            </ul>
	</div>
<div style="height:400px; width:600px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" width="500px" class="tableborder" style="margin:auto" >
<br>

        <tr><td colspan="2" align="center"><h1 style="border:0px; background:linear-gradient(#665EE6,#665EE6); width:200px; height:20px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">Apply Events</h1></td></tr>
             <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
			 <tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
  
   <tr><td class="lefttd" style="color:blue">Select Event </td><td><select name="s3" required><option value="">Select</option>
<?php
$cn=makeconnection();
$s="select * from events";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s3"])
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
<?php
$cn=makeconnection();

$regi="select * from registration where email='" . $_SESSION["email"] . "'";
	$result1=mysqli_query($cn,$regi);
	$reg=mysqli_num_rows($result1);
	$data1=mysqli_fetch_array($result1);
	$regi=$data1[1];

?>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();

$s="select * from events where id='" .$_POST["s3"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$id=$data[0];
	$name=$data[1];
	$sdate=$data[3];
	$edate=$data[4];
	$detail=$data[2];
		
		
	mysqli_close($cn);
}
?>
</td></tr>

         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		 <tr><td class="lefttd"  style="vertical-align:middle;color:blue">Date</td><td><input type="text" readonly id="demo" name="d1"  required="required"  /></td></tr>

         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle;color:blue">Register No</td><td><input type="text" name="t3" value="<?php echo $regi;  ?>"  readonly /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle;color:blue"> Other Detail</td><td><textarea name="t4"></textarea></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="Apply" name="sbmt" style="border:0px; background:linear-gradient(blue,Blue); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
		</table></table></td></tr>	</table></form>
	</div>
     <?php

if(isset($_POST["sbmt"])) 
{
	$d=$_POST["d1"];
	
$cn=makeconnection();
			$s="insert into apply(event_id,ddate,reginum,detail,email) values('" . $_POST["s3"] . "','". $d ."' ,'" . $_POST["t3"] . "','" . $_POST["t4"] . "','". $_SESSION["email"] ."')";
			
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
		

	

?> 	 


      <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	
		<div class="copy">
			<p class="title">© All Rights Reserved | Design by Mr. Bhatia |</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>