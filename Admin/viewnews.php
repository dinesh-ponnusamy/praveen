<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View News</title>
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


       <form method="post">
<table border="0" align="center" width="70%" height="100px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd">View News </td></tr>
<tr><td align="center" style="padding-top:10px">
<table border="0" align="center" width="80%" height="100%" >

<tr><td>
<?php
$cn=mysqli_connect("localhost","root","","ngp");
$s="select * from news";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
    
    echo "<tr style='background-color:bisque;color:blue'><td>News Id </td><td align='center'>News Title</td><td align='center'>Detail </td></tr>";
	while($data=mysqli_fetch_array($result))
	{
           
			echo "<tr><td style='padding-left:10px'>$data[0]</td><td>$data[1]</td><td  style='padding-left:50px'>$data[2]</td></tr>";
		}
		
		
		
	
	mysqli_close($cn);

?>
</td></tr>
</table>
</table>


</form>
       </div>

   </div>
    </center>
<?php include('bottom.php'); ?>
   
</body>
</html>