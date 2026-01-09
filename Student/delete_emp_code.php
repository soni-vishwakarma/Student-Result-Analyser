<?php include '../database.php'; ?>

<?php

// create a variable
$admid=(int)$_GET['adm_id'];

//Execute the query

$sql = "DELETE from admin WHERE adm_id=$admid";
mysqli_query($con,$sql);

if(mysqli_affected_rows($con) > 0){
	$status = "Record Deleted Successfully";
        header("location: edit_administrator.php?status=".$status);
} else {
	$status = "Error in Deletion of Record";
	header("location: edit_administrator.php?status=".$status);
}

?>