<?php include 'database.php'; 
// create a variable
$emp_id=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];
$emp_mob=$_POST['emp_mob'];
$emp_mail_id=$_POST['emp_mail_id'];
$emp_pass=$_POST['emp_pass'];

$regname="/^[a-zA-Z ]*$/";
$regmob="/^\d{10}$/";

//Execute the query
if(empty($emp_name) || empty($emp_mob) || empty($emp_mail_id) || empty($emp_pass))
	{
		$status = "Empty field are not allowed";
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
	elseif(!preg_match('/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/',$emp_mail_id)){
		$status = "Enter valid Email Id.";
        header("location: add_emp.php?status=".$status);
	}
	else{
		mysqli_query($con,"INSERT INTO employee (emp_id,emp_name,emp_mob,emp_mail_id,emp_pass) VALUES ('$emp_id','$emp_name','$emp_mob','$emp_mail_id','$emp_pass')");
		if(mysqli_affected_rows($con) > 0){
	$status = "New Employee added Sucessfully";	
    header("location: add_emp.php?status=".$status);
	} else {
	$status = "Error in adding New Employee";
    header("location: add_emp.php?status=".$status);
	}
}
?>