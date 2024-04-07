<?php

//the example of inserting data with variable from HTML form
$conn=mysqli_connect("sql112.ezyro.com","ezyro_36322541","5f98f9979122964");//database connection
mysqli_select_db($conn,"ezyro_36322541_project_edm");

// Get values from form 
$EmpID = $_POST['empID'];
$aadharno = $_POST['aadharno'];
$name = $_POST['name'];
$fathername = $_POST['fathername'];
$address = $_POST['address'];
$country = $_POST['country'];
$city = $_POST['city'];
$state = $_POST['state'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$qualification = $_POST['qualification'];
$emprole = $_POST['emprole'];

//inserting data order
$order = "INSERT INTO employee
	 (EmpID,aadharno,name,fathername,address,country,city,state,email,mobile,qualification,emprole)
	  VALUES
	   ('$EmpID','$aadharno','$name','$fathername','$address','$country','$city','$state','$email','$mobile','$qualification','$emprole')";

//declare in the order variable
$result = mysqli_query($conn,$order);	//order executes
if($result)
{
 echo("Kudos $name details are Sucessfully registered");
}
else
{
 echo("
         Registration failed");
}

?>
<p><b>Need to perform Delete operation<a href ="html_delete.php">click Here</a></b></p>