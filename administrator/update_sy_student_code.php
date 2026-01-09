<?php 
include 'database.php'; 
// create a variable
$s_id=(int)$_POST['s_id'];
$s_name=$_POST['s_name'];
$s_fn=$_POST['s_fn'];
$s_mn=$_POST['s_mn'];
$s_gender=$_POST['s_gender'];
$s_dob=$_POST['s_dob'];
$s_mob=$_POST['s_mob'];
$s_mail_id=$_POST['s_mail_id'];
$s_address=$_POST['s_address'];
$seatno=$_POST['seatno'];
$institutename=$_POST['institutename'];
$instituteno=$_POST['instituteno'];
$centerno=$_POST['centerno'];
$examyear=$_POST['examyear'];

$regname="/^[a-zA-Z ]*$/";
$regmob="/^\d{10}$/";
$reggender="/^Male|Female$/";


//Execute the query
if(empty($s_name) || empty($s_gender)|| empty($s_mob) || empty($s_mail_id) || empty($s_gender) || empty($s_fn) ||empty($s_mn) ||empty($s_dob) ||empty($s_address) || empty($seatno) || empty($institutename) ||empty($instituteno) ||empty($centerno) ||empty($examyear))
	{
		$status = "Empty field are not allowed";
        header("location: edit_sy_student.php?status=".$status);
	}	
	elseif(!preg_match($regname,$s_name)){
		$status = "Only letters and white space allowed";
        header("location: edit_sy_student.php?status=".$status);
	}
	elseif(!preg_match($regmob,$s_mob)){
		$status = "Enter valid Mobile Number";
        header("location: edit_sy_student.php?status=".$status);
	}
	elseif(!preg_match('/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/',$s_mail_id)){
		$status = "Enter valid Email Id.";
        header("location: edit_sy_student.php?status=".$status);
	}
	else{
$sql = "UPDATE sy1_student SET s_name='$s_name',s_fn='$s_fn',s_mn='$s_mn',s_gender='$s_gender',s_dob='$s_dob', s_mob='$s_mob', s_mail_id='$s_mail_id',s_address='$s_address',seatno='$seatno',institutename='$institutename',instituteno='$instituteno',centerno='$centerno',examyear='$examyear' WHERE s_id=$s_id";
mysqli_query($con,$sql);

if(mysqli_affected_rows($con) > 0){
	$status = "Information updated Sucessfully";
    header("location: edit_sy_student.php?status=".$status);
	} else {
	$status = "Error in updating Information";
    header("location: edit_sy_student.php?status=".$status);
	}
        }

?>
