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
 <link rel="stylesheet" href="search.css" />
	</head>

	<body>
		<div id="header">
		
		<div id="logo"><img src="4.jpg" /></div>
		<h1><strong> SMART CARS</strong></h1>
			<div id="nav">
			  <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="about.php">about</a></li>
			  <li><a href="contact.php">contact</a></li>
			  </ul>
			  </div>
		  </div>
     <div id="main">
		<div id="s1">
         <form>
			<table border="1px">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Model</th>
					<th>Color</th>
				</tr>

				<?php
				foreach($rows as $row)
				{
				 $id=$row['id'];
				 echo "<tr>";
				 echo "<td>".$row['id']."</td>"."<td>".$row['name']."</td>"."<td>".$row['model']."</td>"."<td>".$row['color']."</td>";
				 echo "</tr>";
				}
				?>
			</table>
		</form>
	
		   </div>
		   <div id="s2">
		      <div id="desc">
			  <table id="tab2">
			  <tr>
			  <td><input type="text" id="choose"></td>
			  <td><button onclick="func()" value="offer">offer</button></td> 
			  </tr>
			  <tr>
			  <td colspan="2"><button>Buye</button></td>
			  </tr>
			  </table>
			  <ol>
			  <li>Choose ID Number</li>
			   <li>click button offer</li>
			  <li>the Car will offer to you</li>
			  <li>if you want to buye click buye</li>
			  <ol>
			  </div>
			  <div id="photo">
			    <img src="5.jpg"  id="phot"/>
			  </div>
		   </div>
		    
		 </div>
		<div id="footer">@2018 all copy-rights are reserved

		</div>
	<script type="text/javascript">
	       
	           var x=document.getElementById("choose").value
			   function func()
			   {
				    
				   switch(x)
				   {
					   
					   case 1:
					          document.getElementById("phot").src="1.jpg";
                              break;							  
							 
					   case 2:
					        document.getElementById("phot").src="2.jpg";
                             break;							 
							
					   case 3:
					        document.getElementById("phot").src="3.jpg";
                             break;							
							
                       case 4:
					        document.getElementById("phot").src="4.jpg"	
							break;
							
                       default: 
					   document.getElementById("phot").src="1.jpg"
				   }				
			   }
   </script>
	<script src="main.js"></script>	
	</body>

</html>
