<?php include 'database.php'; 
// create a variable
$s_id=$_POST['s_id'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];
$sub5=$_POST['sub5'];

//$regname="/^[a-zA-Z ]*$/";
//$regmob="/^\d{10}$/";
//$regexamyear="/([1-9]{1}[1=0-9]{3})[-/.]([1-9]{1}[1=0-9]{3})$/";

//Execute the query
if(empty($sub1) || empty($sub2)|| empty($sub3) || empty($sub4)|| empty($sub5))
	{
		$status = "Empty field are not allowed";
        header("location: add_sy_marks.php?status=".$status);
	}	
	else{
		mysqli_query($con,"INSERT INTO sy_marks (s_id,sub1,sub2,sub3,sub4,sub5) VALUES ('$s_id','$sub1','$sub2','$sub3','$sub4','$sub5')");
		if(mysqli_affected_rows($con) > 0){
			$status = "Marks added Sucessfully";	
			header("location: edit_sy_student.php?status=".$status);
			} else {
				echo("Error description: " . $mysqli -> error);
			//$status = "Error in adding Marks";
			//header("location: add_sy_marks.php?status=".$status);
			}
}
?>