<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Magazine</title>
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

       <form method="post" enctype="multipart/form-data">
<table border="0" align="center" width="400" height="300px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd">Add Magazine </td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Magazine Title</td><td><input type="text" name="t3" value="<?php if(isset($_POST["show"])){echo $_POST["t3"];} ?>" required="required" /></td></tr>
<tr><td class="lefttd">Organized By</td><td><input type="text" name="t2" value="<?php if(isset($_POST["show"])){echo $_POST["t2"];} ?>" required="required" pattern="[a-zA-Z1 _]{5,35}" title="please enter only character or numbers between 5 to 35 for organizer name"/></td></tr>

<tr><td class="lefttd">Date</td><td><input type="text" id="shootdate" name="d1" value="<?php if(isset($_POST["show"])){echo $_POST["d12"];} ?>" required="required" /></td></tr>

<tr><td class="lefttd">Uplode Pic</td><td><input type="file" name="t1" required="required"/></td></tr>
<tr><td class="lefttd">Detail</td><td><textarea name="t4"></textarea></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="SAVE"  name="sbmt"  style="border:0px; background:linear-gradient(blue,blue); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
</table>
</form>
       </div>



   </div>
    </center>
    
    <?php
if(isset($_POST["sbmt"])) 
{
$target_dir = "pic/";
$target_file = $target_dir . basename($_FILES["t1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["t1"]["tmp_name"]);
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
		if(move_uploaded_file($_FILES["t1"]["tmp_name"], $target_file)){
		$cn=makeconnection();
			$s="insert into camp(camp_title,organised_by,date,pic,detail) values('" . $_POST["t3"] ."','" . $_POST["t2"] . "','" . $_POST["d1"] . "','" . basename($_FILES["t1"]["name"]) . "','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
			
		} else{
			echo "sorry there was an error uploading your file.";
		}	
	
	}
}
?> 
<?php include('bottom.php'); ?>
   
</body>
</html>