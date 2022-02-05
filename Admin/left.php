<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>

 
   <div style="width:1000px; height:700px; box-shadow:-10px 10px 5px #CCC">
      
       <div style="width:800px;float:left; height:500px">
<table style="width:100%; height:600px">
<tr><td style="font-size:24px; color:#F00; font-weight:bold">Admin Links</td></tr>
<br />
<?php if($_SESSION["usertype"]=="Admin")
{?>
*<tr><td class="lefttd"><a href="adduser.php"><font size="5">Add User</font></a></td></tr>
<tr><td class="lefttd"><a href="upuser.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update User</a></td></tr>
<tr><td class="lefttd"><a href="deluser.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete User</a></td></tr>

<?php }?>

<tr><td class="lefttd"><a href="addevent.php"><font size="5">Add Event</font></a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td class="lefttd"><a href="updateevent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update Event</a></td></tr>
<tr><td class="lefttd"><a href="deleteevent.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete Event</a></td></tr>

<?php }?>
 
<!-- <tr><td class="lefttd"><a href="addstate.php">Add State</a></td></tr> -->
<?php// if($_SESSION["usertype"]=="Admin")
{?>

<!-- <tr><td class="lefttd"><a href="updatestate.php">Update State</a></td></tr>
<tr><td class="lefttd"><a href="deletestate.php">Delete State</a></td></tr> -->

<?php// }?>

<tr><td class="lefttd"><a href="addcamp.php"><font size="5">Add Magazine</font></a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td class="lefttd"><a href="updatecamp.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update Magazine</a></td></tr>
<tr><td class="lefttd"><a href="deletecamp.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete Magazine</a></td></tr>

<?php }?>

<!-- <tr><td class="lefttd"><a href="addbloodgroup.php">Add Blood Group</a></td></tr> -->

<?php// if($_SESSION["usertype"]=="Admin")
// {?>

<!-- <tr><td class="lefttd"><a href="upbloodgroup.php">Update Blood Group</a></td></tr>
<tr><td class="lefttd"><a href="deletebloodgroup.php">Delete Blood Group</a></td></tr> -->

<?php //}?>

<tr><td class="lefttd"><a href="addgallery.php"><font size="5">Add Gallery</font></a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td class="lefttd"><a href="deletegallery.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete Gallery</a></td></tr>

<?php }?>

<tr><td class="lefttd"><a href="addnews.php"><font size="5">Add News</font></a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td class="lefttd"><a href="deletenews.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete News</a></td></tr>

<?php }?>

<!-- <tr><td class="lefttd"><a href="addadvertise.php">Add Advertisement</a></td></tr> -->

<?php //if($_SESSION["usertype"]=="Admin")
// {?>

<!-- <tr><td class="lefttd"><a href="deleteadver.php">Delete Advertisement</a></td></tr> -->

<?php //}?>

<!-- <tr><td class="lefttd"><a href="viewcity.php">View City</a></td></tr> -->
<!-- <tr><td class="lefttd"><a href="viewstate.php">View State</a></td></tr> -->
<tr><td class="lefttd"><a href="viewapply.php"><font size="4" style="color:red">View Apply</font></a></td></tr>
<tr><td class="lefttd"><a href="viewnews.php"><font size="4">View News</font></a></td></tr>


<tr><td class="lefttd"><a href="viewcamp.php"><font size="4">View Magazine</font></a></td></tr>
<tr><td class="lefttd"><a href="viewcontact.php"><font size="4">View Contact</font></a></td></tr>
</table></div></div>

</body>
</html>