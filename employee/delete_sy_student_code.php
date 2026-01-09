<?php include 'database.php'; ?>

<?php

// create a variable
$s_id=(int)$_GET['s_id'];

//Execute the query

$sql = "DELETE from sy1_student WHERE s_id=$s_id";
mysqli_query($con,$sql);

if(mysqli_affected_rows($con) > 0){
	$status = "Record Deleted Successfully";
        header("location: edit_sy_student.php?status=".$status);
} else {
	//  echo("Error description: " . $mysqli -> error);
	$status = "Error in Deletion of Record";
	header("location: edit_sy_student.php?status=".$status);
}

?>