<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Profile</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>

<?php

if($_SESSION['donorstatus']=="")
{
	header("location:../login.php");
}
?>
<?php include('function.php'); ?>
<?php
			
	$cn=mysqli_connect("localhost","root","","ngp");
			$s="select * from registration where email='" . $_SESSION["email"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	$data=mysqli_fetch_array($q);
	$name=$data[2];
	$year=$data[7];
	$shift=$data[8];
	$mobile=$data[10];
	$pic=$data[3];
	//echo $name;
	mysqli_close($cn);
	
		
		
	
	

?> 
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
            <li><a href="viewevent.php">View Apply</a></li>
            <li><a href="viewcamp.php">View Requestes</a></li>
            <li><a href="logout.php">log Out</a></li>
            </ul>
	</div>
<div style="height:400px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
 <form method="post">

    <table cellpadding="0" cellspacing="0" width="600px"  class="tableborder" style="margin:auto">
	<tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td colspan="2" align="center"><h1 style="border:0px; background:linear-gradient(#665EE6,#665EE6); width:200px; height:20px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">Update Profile</h1></td></tr>
             <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
			 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
     <tr><td colspan="2">&nbsp;</td></tr>
     <table cellpadding="0" cellspacing="0" width="600px"  class="tableborder" style="margin:auto">
    <tr><td  align="right">&nbsp;</td><td>
    <input type="hidden" name="h1" value="<?php {echo @$pic;} ?>" />

    <td style="vertical-align:top" width="450px" height="400px">
                <table cellpadding="0" cellspacing="0" width="450px">
   <td style="vertical-align:top; padding-left:70px" width="500px">
   <table cellpadding="0" cellspacing="0" width="450px" align="center" >
    <tr><td class="lefttd"  style="vertical-align:middle;color:blue"> Name </td><td><input type="text" name="t1" value="<?php echo @$name;  ?>"  required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for  name" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
 <tr><td class="lefttd"  style="vertical-align:middle;color:blue"> Year </td><td><input type="text" name="r1" value="<?php echo @$year;  ?>"  required="required"  title="please enter only character  between 5 to 15 for  name" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle;color:blue"> Shift</td><td><input type="text" name="t2"  required="required"  title="please enter only numbers  between 2 to 2 for age" value="<?php echo @$shift;?>" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="lefttd"  style="vertical-align:middle;color:blue"> Mobile No</td><td><input type="text" name="t3" value="<?php echo @$mobile;?>"  pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         
		<tr><td>&nbsp;</td><td><input type="submit" value="Update" name="sbmt" style="border:0px; background:linear-gradient(blue,blue); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
        
        <tr><td colspan="2"  align="center"></td></tr>
        
		</table></table></td></tr>	</table></form>
	</div>
 
     
   
<?php
	
	if(isset($_POST["sbmt"])) 
	{
		$cn=makeconnection();
		
		
					$s="update registration set name='" .$_POST["t1"]. "' ,year='" .$_POST["r1"]."' , shift='" .$_POST["t2"]. "',mobile='" .$_POST["t3"]. "' where email='" .$_SESSION["email"]. "'";
		
$i=mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record update');</script>";
	
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