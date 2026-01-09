<?php include '../database.php'; 
// create a variable

$courseid=$_POST['courseid'];
$coursename=$_POST['coursename'];
$department=$_POST['department'];
$coursemarks=$_POST['coursemarks'];
$year=$_POST['year'];

$redid="/^[1-9]{1}\d[a-zA-Z ]*$";
$regname="/^[a-zA-Z ]*$/";
$regdepartment="/^[a-zA-Z ]*$/";
$regmarks="[0-9]{1}|[\d]{2}|[\d]{3}";
$regyear="[1-9]{1}[\d]{3}$";
//Execute the query
if(empty($courseid) || empty($coursename) || empty($department) || empty($coursemarks) || empty($year))
	{
		$status = "Empty field are not allowed";
        header("location: add_course.php?status=".$status);
	}	
	elseif(!preg_match($regid,$courseid)){
		$status = "Only numbers and letters are allowed";
        header("location: add_course.php?status=".$status);
	}
	elseif(!preg_match($regname,$coursename)){
		$status = "Only letters and white space allowed";
        header("location: add_course.php?status=".$status);
	}
	elseif(!preg_match($regdepartment,$department)){
		$status = "Enter valid Department Name";
        header("location: add_course.php?status=".$status);
	}
	elseif(!preg_match($regmarks,$coursemarks)){
		$status = "Enter valid Course Marks.";
        header("location: add_course.php?status=".$status);
	}
	elseif(!preg_match($regyear,$year)){
		$status = "Enter valid Year.";
        header("location: add_course.php?status=".$status);
	}
	else{
		mysqli_query($con,"INSERT INTO admin (courseid,coursename,department,coursemarks,year) VALUES ('$courseid','$coursename','$department','$coursemarks','year')");
		if(mysqli_affected_rows($con) > 0){
	$status = "New Course added Sucessfully";	
    header("location: add_course.php?status=".$status);
	} else {
$sql = "UPDATE admin SET coursename='$coursename', department='$department', coursemarks='$coursemarks' WHERE courseid=$courseid";
mysqli_query($con,$sql);


if(mysqli_affected_rows($con) > 0){
	$status = "Information updated Sucessfully";
    header("location: edit_course.php?status=".$status);
	} else {
	$status = "Error in updating Information";
    header("location: edit_course.php?status=".$status);
	}
        }

?>