<?php
//database connection 
$conn=mysqli_connect("sql112.ezyro.com","ezyro_36322541","5f98f9979122964");
mysqli_select_db($conn,"ezyro_36322541_project_edm");

// Get values from form 
$EmpID = $_POST['empID'];
//Deleting the record
 $query="delete from employee where EmpID =$EmpID";
//declare in the order variable
$result = mysqli_query($conn,$query);	//order executes
if($result)
{
 echo("Kudos Empid $EmpID is Sucessfully deleted");
}
else
{
 echo("
         Deletion failed");
}

?>

<center>
<br><br><br>

<a href="html_form.php">GO BACK</a>
</center>
