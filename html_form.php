<html>
<head>
<title>Employee Details Management</title>
</head>
<body style="background:linear-gradient(45deg,red,orange)">
<center><h1>Employee Details Management System</h1></center><br>
<div style="display:flex;justify-content:center;align-items:center;">
<form method="post" action="input.php"><br><br><br>
<table cellpadding="2" cellspacing="2" border="0" align="left" style="background:linear-gradient(180deg,green,orange)">
<tr><td>Employee ID</td><td><input type="text" name="empID" size="20" placeholder="Enter the Employee Id"></td></tr>
<tr><td>Aadharcard No</td><td><input type="text" name="aadharno" size="20" placeholder="Enter the Aadharcard NO"></td></tr>
  
<tr><td>Name</td><td><input type="text" name="name" size="20" placeholder="Enter the Name"></td></tr>
    
  <tr><td>FatherName</td><td><input type="text" name="fathername" size="20" placeholder="Enter the Father Name" ></td></tr>
    
  <tr><td>Address</td><td><textarea name="address" value="" cols="21" rows="2" placeholder="Enter the Address"></textarea></td></tr>
   
  <tr><td>Country</td><td><input type="text" value="" name="country"/ placeholder="Enter the country"></td></tr>
  
  <tr><td>City</td><td><input type="text" value="" name="city"/ placeholder="Enter the city"></td></tr>
   
  <tr><td>State</td><td><input type="text"placeholder="Enter the state" value="" name="state"/></td></tr>
  
  <tr><td>E-Mail</td><td><input type="email"placeholder="Enter the Email" name="email" size="20"></td></tr>
  
  <tr><td>Mobile</td><td><input type="text" placeholder="Enter the Mobile number" name="mobile" size="20"></td></tr>
  
  <tr><td>Qualification</td><td><input type="text"  placeholder="Enter the Qualification" name="qualification" size="20"></td></tr>
  
  <tr><td>Employee Role</td><td><input type="text"  placeholder="Employee Role" name="emprole" size="20" alt="Job description"></td></tr>
  
  <tr><td><input type="submit" name="submit" value="Register" style="background:black;color:white"></td><td><input type="reset" name="reset" value="Reset" style="background:orange;color:white"></td></tr>
  
</form>
</table>
</div>

   <?php 
	 	 $link=mysqli_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysqli_select_db($link,"project_edm") or die ("Cannot select the database!");
	 $query="SELECT * FROM employee where country='INDIA'";
		
		  $resource=mysqli_query($link,$query);
		  
		  
		  echo "<table align=\"right\" border=\"1\" width=\"15%\">
		  
		<tr><caption><B>Registered Users</B></caption></tr><tr><td><b>Employee ID</b></td><td><b>Name</b></td></tr> ";
while($result=mysqli_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[0]."</td><td>".$result[2]."</td></tr>";
	} echo "</table>";
	 ?>


 <center><p><b> Need to do some  Delete opertions then <a href= "html_delete.php">click here</a></b></p></center>
<!-- ends here component-->
</body>
</html>