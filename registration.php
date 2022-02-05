<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 
</head>

<body>
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
		<?php require('header.php');?>
	</div>
<div style="height:530px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " ><br>
<tr><td colspan="2" align="center"><h1 align="center" style="border:0px; background:linear-gradient(#665EE6,#665EE6); width:300px; height:40px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:30px; text-shadow:1px 1px 6px black; ">Student Registration</h1></td></tr>
           
    
   
<tr><td colspan="2">&nbsp;</td></tr>
   
                <!-- <tr><td  style=" padding-left:20px;" ><img src="Images/sidebanner.jpg" width="170px" class="shaddoww"/>&nbsp; </td> -->
					<td style="vertical-align:top;padding-top:20px;padding-left:20px;">
					
                    <table cellpadding="0" cellspacing="0" style="width:100%; height:400px;">

<tr><td class="lefttd">Register No:</td><td><input type="text" name="t9" required="required"  /></td></tr>
<tr><td class="lefttd">Name:</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" /></td></tr>
<tr><td class="lefttd">Uplode Pic</td><td><input type="file" name="t8" /></td></tr>
<tr><td class="lefttd">Gender</td><td><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female" >Female</td></tr>
<tr><td class="lefttd">Date Of Birth</td><td><input type="date" name="t2" required="required"  title="please enter only  numbers between 2 to 2 for age" /></td></tr>
<tr><td class="lefttd">Degree:</td><td><input type="text" name="t10" required="required"  /></td></tr>
<tr><td class="lefttd">Department:</td><td><input type="text" name="t11" required="required"  /></td></tr>
<tr><td class="lefttd">Shift:</td><td><input type="text" name="t12" required="required"  /></td></tr>
<tr><td class="lefttd">Year:</td><td><input type="text" name="t13" required="required"  /></td></tr>
<tr><td class="lefttd">Mobile No</td><td><input type="number" name="t3" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." /></td></tr>
<tr><td class="lefttd">E-Mail</td><td><input type="email" name="t5" required="required" /></td></tr>

<tr><td class="lefttd">Password</td><td><input type="password" name="t6" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>

<tr><td class="lefttd">Confirm Password</td><td><input type="password" name="t7" required="required" pattern="[a-zA-Z0-9 ]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
	 


<tr><td>&nbsp;</td><td><input type="submit" value="Registered" name="sbmt" style="border:0px; background:linear-gradient(blue,blue); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>
</td></tr>
</table>
</form>
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
			<p class="title">© All Rights Reserved | Design by ......|</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>

<?php
if(isset($_POST["sbmt"])) 
{
$target_dir = "stu_pic/";
$target_file = $target_dir . basename($_FILES["t8"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["t8"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
//aloow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file)){
		$cn=makeconnection();
			$s="insert into registration(reginum,name,pic,gender,degree,department,year,shift,dateofbirth,mobile,email,password) 
			values('" . $_POST["t9"] ."','" . $_POST["t1"] . "','" . basename($_FILES["t8"]["name"])  ."','" . $_POST["r1"] . "','" . $_POST["t10"] . "'
			,'" . $_POST["t11"] . "','" . $_POST["t13"] .  "','" . $_POST["t12"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] . "')";
			
	mysqli_query($cn,$s);
	mysqli_close($cn);
	if($s>0)
	echo "<script>alert('Record Save');</script>";
	
	else
	echo "<script>alert('Record save');</script>";
		}
	else
	echo "sorry there was an error uploading your file.";
	
	}
}
?> 
</body>
</html>