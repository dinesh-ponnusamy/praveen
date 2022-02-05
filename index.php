<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mobile Magazine And Events</title>
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
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
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
<!-- <marquee>SDkajsd</marquee> -->
        <div>

          <div class="h_btm_bg">
<div class="wrap">
<div class="h_btm">
	<div class="header-para">
		

		<p class="serif"><font size="5" style="color:blue">Government Arts College:</font></p>
		<p style="">&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Government Arts College (Autonomous) Since 1852
The Government Arts College (Autonomous), Coimbatore was established in the year 1852 by the British Government. This College is one of the best Government Institutions in Tamilnadu. Top beaurocrats, administrators, defence personnel and high profile politicians are alumni of this institution. It was conferred autonomous status in the year 1987.

In 2012, the college was re-accredited with ‘A’ Grade by NAAC.

Our college has consistently remaining among the Top 3 Government Colleges in Tamilnadu. Research scholars in all the departments are contributing research articles in reputed journals.
..... <a href="college.php">Read More</a></p>

	</div>  <br><br>
	<div class="clear"></div>
</div>
</div>
</div>
<div class="s_bg">
<div class="wrap">
<div class="main_cont">
 <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
  	    		<li>
  	    	    <img src="Images/slider1.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider2.jpg"/>
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider3.jpg"/>
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider4.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider5.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider6.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="Images/slider7.jpg" />
  	    		</li>
  	    		<!-- <li>
  	    	    <img src="Images/slider8.jpg" />
  	    		</li> -->
          </ul>
        </div>
      </section>
	<div class="ribben">
	   <div class="l-triangle-top"></div>
	   <div class="l-triangle-bottom"></div>
		   <div class="rectangle"></div>
	      <div class="r-triangle-top"></div>
	   <div class="r-triangle-bottom"></div>
	   <div class="clear"></div>
	</div>
	
<div class="main">

	<div class="content">		
	<h1 align="center" style="border:0px; background:linear-gradient(#665EE6,#665EE6); width:200px; height:20px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:18px; text-shadow:1px 1px 6px black; ">College Magazine</h1>
			<br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College Magazine Type of site Advice and Entertainment website Created by	Amanda Nachman
Website	www.collegemagazine.com Commercial Yes Registration	Optional Launched 2007 College Magazine is a college-guide and quarterly magazine written and edited by college students created in 2007 by publisher and founder Amanda Nachman. Both site and magazine feature articles on academic advice, career tips, student success stories, NCAA sports features,celebrity interviews. Past issues have featured musicians, athletes and celebrities including Mike Posner,
Kate Voegel, Sarah Bareillis, Nastia Liukin, Kim Kardashian, Glenn Howerton and Chelsea Handler.</p>
	</div>
	<div class="sidebar">
	<h1 align="center" style="border:0px; background:linear-gradient(#665EE6,#665EE6); width:200px; height:20px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:18px; text-shadow:1px 1px 6px black; ">Latest News</h1>
	
			<div class="blog_posts">

    <marquee direction="up" scrolldelay="300"><table >
<tr><td>
                         <div class="blog_desc">
						
                         <br />

		<?php			  
 $cn=mysqli_connect("localhost","root","","ngp");
$s="select * from news";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style='font-weight:bold;color:red'>$data[1]</td></tr><tr>
				<td  style=' padding-left:10px;color:blue;'>$data[2]</td></tr>";
			}
			mysqli_close($cn);
			?>


					  </div>
                        </td></tr>
                   
                </table></marquee>  
				 
					 <div class="clear"></div>	
				</div>	
			
			
	</div>
	<div class="clear"></div>
	</div>
</div>
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
</body>
</html>