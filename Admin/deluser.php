<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DELETE USER</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>

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
	$s="delete from users where username='"  . $_POST["s2"] ."'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record delete');</script>";
}

?>
       <form method="post">
<table border="0" align="center" width="400" height="300px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd">DELETE USER</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Select User Name</td><td><select name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from users";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		
		
			echo "<option value=$data[0]>$data[0]</option>";
		
		
		
		
	}
	mysqli_close($cn);

?>



</select>

<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from users where username='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$username=$data[0];
	$pass=$data[1];
	$usertype=$data[2];
		
		
	mysqli_close($cn);
}
?>

</td></tr>


<tr><td>&nbsp;</td><td><input type="submit" value="DELETE" name="sbmt"  style="border:0px; background:linear-gradient(blue,blue); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
</table>
</form>
       </div>

   </div>
    </center>
<?php include('bottom.php'); ?>
   
</body>
</html>