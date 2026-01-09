<?php include '../database.php'; ?>

<?php

// create a variable
$emp_id=(int)$_GET['emp_id'];

//Execute the query

$sql = "DELETE from employee WHERE emp_id=$emp_id";
mysqli_query($con,$sql);

if(mysqli_affected_rows($con) > 0){
	$status = "Record Deleted Successfully";
        header("location: edit_emp.php?status=".$status);
} else {
	$status = "Error in Deletion of Record";
	header("location: edit_emp.php?status=".$status);
}

?>