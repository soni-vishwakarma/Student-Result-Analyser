<?php include '../database.php'; ?>

<?php

// create a variable
$id=(int)$_GET['id'];

//Execute the query

$sql = "DELETE from admin WHERE id=$id";
mysqli_query($con,$sql);

if(mysqli_affected_rows($con) > 0){
	$status = "Record Deleted Successfully";
        header("location: edit_administrator.php?status=".$status);
} else {
	$status = "Error in Deletion of Record";
	header("location: edit_administrator.php?status=".$status);
}

?>