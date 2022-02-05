<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<?php include('admin/function.php'); ?>

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
		<?php require('header.php');?>
	</div>
    <div>
<div style="height:500px; width:100%; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">


  <div   class="col span_2_of_3"> <div class="contact-form" style="padding-left:100px;">
  <br><br>
  <h1 align="center" style="border:0px; background:linear-gradient(#665EE6,#665EE6); width:160px; height:40px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:30px; text-shadow:1px 1px 6px black; ">Contact Us</h1>
<br>
    <table  cellspacing="0" cellpadding="0"  width="500px" height="300px">               

<tr><td class="lefttd"  style="vertical-align:middle;color:blue"> Name:</td><td><input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" /></td></tr>



<tr><td class="lefttd"  style="vertical-align:middle;color:blue">E-Mail</td><td><input type="email" name="t2" required="required" /></td></tr>
<tr><td class="lefttd"  style="vertical-align:middle;color:blue">Mobile No</td><td><input type="number" name="t3"   pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>

<tr><td class="lefttd"  style="vertical-align:middle;color:blue">Subject</td><td><textarea name="t4"></textarea></td></tr>

<tr><td>&nbsp;</td><td><input type="submit" value="Send Us" name="sbmt" style="border:0px; background:linear-gradient(blue,blue); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:16px; text-shadow:1px 1px 6px black; "></td></tr></table>

</div>
</div>
		
		  </div>
</form>
        </div>
         </div> 
         </div>
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="registration.php">Registration</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>

<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</body>
</html>