

<?php
include ('database.php');

if(isset($_POST['submit']))
{
 $s=$_POST['name'];
 $rows=$db->getRows("SELECT * FROM car WHERE name LIKE '%$s%'",array());

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
	  <title></title>
	  <meta charset="utf-8" >
 <link rel="stylesheet" href="contact.css" />
	</head>

	<body>
		<div id="header">
		
		<div id="logo"><img src="4.jpg" /></div>
		<h1><strong> SMART CARS</strong></h1>
			<div id="nav">
			  <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="about.php">about</a></li>
			  <li><a href="#">contact</a></li>
			  </ul>
			  </div>
		  </div>
     
	 
	<div id="mok">
	
	<table>
	<tr><td><img src="gmail.PNG"/></td><td><a href="https://mail.google.com/mail/u/0/#inbox">E-mail:mok18455@gmail.com</a></td></tr>
	<tr><td><img src="facebook.PNG"/></td><td><a href="https://www.facebook.com/mokhtar.hashim.14">Facebook:mokhtar hashim</a></td></tr>
	<tr><td><img src="twitter.PNG"/></td><td><a href="https://twitter.com/mok18455">Twitter:mokhtar hashim</a></li></td></tr>
    </table>
	</div>
	 
		<div id="footer">
		@2018 all copy-rights are reserved

		</div>
	
	<script src="main.js"></script>	
	</body>

</html>


















 
