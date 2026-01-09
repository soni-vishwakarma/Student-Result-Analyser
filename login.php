<?php 
include 'database.php'; 
$username=$_POST['username'];
$password=$_POST['password'];
$usertypeop=$_POST['usertype'];
$sql ="select * from employee where emp_mail_id = '$username' AND emp_pass = '$password'";
$sql1 ="select * from admin where adm_mail_id = '$username' AND adm_pass = '$password'";
	$res = mysqli_query($con,$sql);
	$res1 = mysqli_query($con,$sql1);
	//$res2 = mysqli_query($con,$sql1);
	$check = mysqli_fetch_array($res);
	$check1 = mysqli_fetch_array($res1);
	//$check2 = mysqli_fetch_array($res2);
    if($username=="" or $password=="")
    {
		$status = "Please enter your Email Id and Password for Login";
        header("location:index.php?status=".$status);
    }
    else if($usertypeop=="Employee")
	{
		if(isset($check))
		{	
			session_start();
			$_SESSION['sid']=session_id();
			$res = mysqli_query($con,$sql);
			$result = array();
			while($row = mysqli_fetch_array($res))
			{
				$eid=$row['emp_id'];
				$ename = $row['emp_name'];
			}
			$_SESSION['eid'] = $eid;
			$_SESSION['ename'] = $ename;
			header("location: employee/emp_dashboard.php");
		}
		else{
		$status = "Wrong Username or Password";
        header("location:index.php?status=".$status);
		}
	}		
	else  if($usertypeop=="Administrator")
	{
		if(isset($check1))
		{
			session_start();
			$_SESSION['sid']=session_id();
			$res1 = mysqli_query($con,$sql1);
			$result = array();
			$aid;
			while($row = mysqli_fetch_array($res1))
			{
				$aid = $row['adm_id'];
			}	
			$_SESSION['aid'] = $aid;
			header("location:administrator/admin_dashboard.php");
		}
		else{
		$status = "Wrong Username or Password";
        header("location:index.php?status=".$status);
		}
	}
mysqli_close($con);
?>