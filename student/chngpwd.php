<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>

<?php

if($_SESSION['donorstatus']=="")
{
	//header("location:../login.php");
	echo "<script>location.replace('../login.php');</script>";
}
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
            <li><a href="viewapply.php">View Apply</a></li>
            <li><a href="viewevent.php">View Events</a></li>
            <li><a href="logout.php">log Out</a></li>
            </ul>
	</div>
<div style="height:300px; width:600px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
<form method="post">
     <table cellpadding="0" cellspacing="0" width="500px" class="tableborder" style="margin:auto" >

	 <tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td colspan="2" align="center"><h1 style="border:0px; background:linear-gradient(#665EE6,#665EE6); width:200px; height:20px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">Update Profile</h1></td></tr>
             <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
			 <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                
                    <td style="vertical-align:top"><table cellpadding="0" cellspacing="0">
   
        <tr><td class="lefttd"  style="vertical-align:middle;color:blue"> Old Password </td><td><input type="password" name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle;color:blue"> New Password:</td><td><input type="password" name="t3"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for new password" /></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td class="lefttd"  style="vertical-align:middle;color:blue"> Comfirm Password</td><td><input type="password"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for confirm password" name="t4"/></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td>&nbsp;&nbsp;<td><input type="submit" value="Change" name="sbmt" style="border:0px; background:linear-gradient(blue,blue); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>	
		</table></td></tr></table>	
        </form>
	</div>
	

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
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

            $s="select *from registration where email='" .$_SESSION["email"] . "' and  password='" .$_POST["t2"] . "'";
    // echo $s;
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);

    

	if($r>0)
	{
	
	$s1="update registration set password='" . $_POST["t3"]  ."' where email='" .$_SESSION["email"] ."'";
	mysqli_query($cn,$s1);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";

	}
	else
	{
        echo "<script>alert('Invalid old Password');</script>";
        // echo "<script>alert($r[email]);</script>";
	}
		
		}	
	

?> 
</body>
</html>