<?php include 'database.php'; 
// create a variable
$emp_id=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];
$emp_mob=$_POST['emp_mob'];
$emp_mail_id=$_POST['emp_mail_id'];
$emp_pass=$_POST['emp_pass'];
$redid="/^[1-9]{1}\d[a-zA-Z ]*$";
$regname="/^[a-zA-Z ]*$/";
$regmob="/^\d{10}$/";

//Execute the query
if(empty($emp_id) || empty($emp_name) || empty($emp_mob) || empty($emp_mail_id) || empty($emp_pass))
	{
		// $status = "Empty field are not allowed";
        header("location: add_emp.php?status=".$status);
	}	
	elseif(!preg_match($regid,$emp_id)){
		$status = "Only numbers and letters are allowed";
        header("location: add_emp.php?status=".$status);
	}
	elseif(!preg_match($regname,$emp_name)){
		$status = "Only letters and white space allowed";
        header("location: add_emp.php?status=".$status);
	}
	elseif(!preg_match($regmob,$emp_mob)){
		$status = "Enter valid Mobile Number";
        header("location: add_emp.php?status=".$status);
	}
	elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/',$emp_mail_id)){
		$status = "Enter valid Email Id.";
        header("location: add_emp.php?status=".$status);
	}
	else{
$sql = "UPDATE emp SET emp_name='$emp_name', emp_mob='$emp_mob',emp_mail_id='$emp_mail_id' WHERE emp_id=$emp_id";
mysqli_query($con,$sql);


if(mysqli_affected_rows($con) > 0){
	$status = "Information updated Sucessfully";
    header("location: edit_emp.php?status=".$status);
	} else {
	$status = "Error in updating Information";
    header("location: edit_emp.php?status=".$status);
	}
		}

?>