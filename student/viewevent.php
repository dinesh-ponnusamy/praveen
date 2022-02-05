<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Events</title>
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
<div style="height:300px; width:1000px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
 <table cellpadding="20" cellspacing="20" width="100%" height="100%"  style="margin:auto" >
<br><br>
 <tr><td colspan="5" align="center"><h1 style="border:0px; background:linear-gradient(#665EE6,#665EE6); width:200px; height:20px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">View Events </h1></td></tr>
         
 <tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
      
 <tr style="background-color:bisque;color:blue" align="center" class="bold">  
  
          <td class="bold" >Event Title</td><td align="center">Organised By</td><td align="center">Start Date</td><td align="center">Last Date</td><td align="center">Details</td>
            
        </tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td></tr>



<?php

	
$cn=mysqli_connect("localhost","root","","ngp");
$s="select * from events";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td align='center'  style=' padding-left:10px'>$data[1]</td><td align='center'  style=' padding-left:20px'>$data[2]</td><td align='center'  style=' padding-left:20px'>$data[3]</td><td align='center'  style=' padding-left:20px'>$data[4]</td><td align='center'   style=' padding-left:50px'>$data[2]</td></tr>";
			}
			mysqli_close($cn);
			?>


</table>
</form>
        </div>
          
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved | Design by Mr. Bhatia |</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>




			
			
	
</body>
</html>