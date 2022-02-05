<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Apply</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

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

       <form method="post" enctype="multipart/form-data">
<table border="0" align="center" width="100%" height="100%" class="shaddoww">

<tr><td colspan="5" align="center" class="toptd">Event Apply</td> </tr><tr><td colspan="2">&nbsp;</td></tr>
<tr></tr>
<tr><td class="lefttd"><span style="background-color:blue;color:white">Select Event </span></td><td><select name="s3" required><option value="">Select</option>
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
<input type="submit" value="Show" name="show"  formnovalidate="formnovalidate" />

<?php

if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from apply where event_id='" .$_POST["s3"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	echo "<br><br><tr style='background-color:bisque;color:blue'><td style='padding-left:10px'>Id</td><td>Name </td><td align='center'>Email Id</td><td align='center'>Mobile No</td><td align='center'>Details </td></tr> <tr><td><br>";
		 
    while($data=mysqli_fetch_array($result))
	{
			echo "<tr><td style='padding-left:10px'>$data[0]</td><td>$data[3]</td><td>$data[2]</td><td>$data[5]</td><td>$data[4]</td></tr>";
		}
		
		
	mysqli_close($cn);
}

?>
</td></tr>
</table>
</form>
       </div>



   </div>
    </center>
    
 
<?php include('bottom.php'); ?>
   
</body>
</html>