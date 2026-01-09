<html>
<?php 					
	include 'database.php'; 
	$s_id=(int)$_GET['s_id'];
	$sql = "select * from student where s_id=".$s_id;
	$res = mysqli_query($con,$sql);
	$result = array();
		while($row = mysqli_fetch_array($res))
			{
				$s_name=$row['s_name'];
				$s_fn=$row['s_fn'];
				$s_mn=$row['s_mn'];
				$s_gender=$row['s_gender'];
				$s_dob=$row['s_dob'];
				$s_mob=$row['s_mob'];
				$s_mail_id=$row['s_mail_id'];
				$s_address=$row['s_address'];
				$seatno=$row['seatno'];
				$institutename=$row['institutename'];
				$instituteno=$row['instituteno'];
				$centerno=$row['centerno'];
				$examyear=$row['examyear']; 
			}		
	//$m_id=(int)$_GET['m_id'];
	$sql1 = "select * from fy_marks where s_id=".$s_id; //show me this table
			//$sql = "select * from sy_student where s_id=1";
	$res1 = mysqli_query($con,$sql1);
	$result1 = array();
		while($row1 = mysqli_fetch_array($res1))
			{ 
				$sub1=$row1['sub1'];
				$sub2=$row1['sub2'];
				$sub3=$row1['sub3'];
				$sub4=$row1['sub4'];
				$sub5=$row1['sub5'];	
			}
	/*		
	include 'database.php'; 
	$sql = "select * from student"
	$s_name=$_GET['s_name'];
	$s_fn=$_GET['s_fn'];
	$s_mn=$_GET['s_mn'];
	$s_dob=$_GET['s_dob'];
	$instituteno=$_GET['instituteno'];
	$centerno=$_GET['centerno'];
	$seatno=$_GET['seatno'];
	$examyear=$_GET['examyear'];
	$p_c=$_GET['c'];
	$p_cpp=$_GET['cpp'];
	$p_sen=$_GET['sen'];
	$p_osy=$_GET['osy'];
	$p_java=$_GET['java'];*/
	$total=$sub1+$sub2+$sub3+$sub4+$sub5;
	$per=($total*100)/500;
	$grade1=0;
	$grade2=0;
	$grade3=0;
	$grade4=0;
	$grade5=0;
	$count=0;
	$s="a";
	$gen='';
	$min=35;
	$max=100;
	$c='Programming in C';
	$cpp='Programming in C++';
	$sen='Software Engineering';
	$osy='Operating system';
	$java='Core Java';
	
	if($sub1<35 && $sub1>0){
		$remark1="D";
		$count++;
		$s=$s.' and '.$c;
	}else if($sub1>80){
		$remark1="A";
	}
	else if($sub1>60){
		$remark1="B";
	}
	else if($sub1>35){
		$remark1="C";
	}else{
		$remark1='';
	}
	
	if($sub2<35 && $sub2>0){
		$remark2="D";
		$count++;
		$s=$s.' and '.$c;
	}else if($sub2>80){
		$remark2="A";
	}
	else if($sub2>60){
		$remark2="B";
	}
	else if($sub2>35){
		$remark2="C";
	}else{
		$remark2='';
	}
	
	if($sub3<35 && $sub3>0){
		$remark3="D";
		$count++;
		$s=$s.' and '.$c;
	}else if($sub3>80){
		$remark3="A";
	}
	else if($sub3>60){
		$remark3="B";
	}
	else if($sub3>35){
		$remark3="C";
	}else{
		$remark3='';
	}
	
	if($sub4<35 && $sub4>0){
		$remark4="D";
		$count++;
		$s=$s.' and '.$c;
	}else if($sub4>80){
		$remark4="A";
	}
	else if($sub4>60){
		$remark4="B";
	}
	else if($sub4>35){
		$remark4="C";
	}else{
		$remark4='';
	}
	if($sub5<35 && $sub5>0){
		$remark5="D";
		$count++;
		$s=$s.' and '.$c;
	}else if($sub5>80){
		$remark5="A";
	}
	else if($sub5>60){
		$remark5="B";
	}
	else if($sub5>35){
		$remark5="C";
	}else{
		$remark5='';
	}
	
	/*if($sub2<35){
		$remark2="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$cpp;
	}else if($sub2>79){
		$remark2="<font color='green'>D</font>";
	}else{
		$remark2='-';
	}

	if($sub3<35){
		$remark3="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$sen;
	}else if($sub3>79){
		$remark3="<font color='green'>D</font>";
	}else{
		$remark3='-';
	}

	if($sub4<35){
		$remark4="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$osy;
	}else if($sub4>79){
		$remark4="<font color='green'>D</font>";
	}else{
		$remark4='-';
	}
	
	if($sub5<35){
		$remark5="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$java;
	}else if($sub5>79){
		$remark5="<font color='green'>D</font>";
	}else{
		$remark5='-';
	}*/

	$s=str_replace('a and', '', $s);
	if($count>=1){
		$s="Fail";
	}else if($count==0){
		$s="Pass";	
		//else if($count<=2){
		//$s="Compartment in ".' '.$s;
	}
?>
<center>
	<table border="1" cellspacing="0">
		<tr>
			<td>
				<table  width="100%">
					<tr>
						<td>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><img src="img/logo/logo1.png" width=110 height=60></strong><br>
						</td>
						<td>
							<b><br><font  size='7' style = "font-family:Old English Text MT">Board Of Higher Education</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>
							<font size='3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>STATEMENT OF MARKS</b>
						</td>
					</tr>
				</table>
				<table>
					<tr>
						</td>
							<br><font size='4'><b><?php echo "&nbsp;&nbsp;Mr./Ms.&nbsp;&nbsp;".$s_name; ?></b>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
		<td>
			<table width=100%>
				<tr>
				<td><font size='4'><center>
				<?php echo "<b>FIRST YEAR</b>";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo "<b>$examyear</b>"?></center></font></td>
				</tr>
				<tr><td><font size='4'><?php echo "<b><br>&nbsp;&nbsp;Father's Name&nbsp;&nbsp;</b>Mr.&nbsp;$s_fn"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo "<b>Mother's Name&nbsp;&nbsp;</b>Mrs.&nbsp;$s_mn"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo "<b>D.O.B.&nbsp;&nbsp;</b>&nbsp;$s_dob"?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				<?php echo "<b>&nbsp;&nbsp;Seat No.&nbsp;&nbsp;</b>$seatno"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo "<b>Institute No.&nbsp;&nbsp;&nbsp;</b>$instituteno";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo "<b>Center No.&nbsp;&nbsp;</b>$centerno"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
				</td></tr>
			</table>			
		</td>
		</tr>
		<!--<tr>
			<td>
				<table width=100%>
					<tr>
					<td><font size='4'><center><?php echo "<b>Seat No.&nbsp;&nbsp;</b>$seatno"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo "<b>Institute No.&nbsp;&nbsp;&nbsp;</b>$instituteno";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo "<b>Center No.&nbsp;&nbsp;</b>$centerno"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></font>
					</td>
					</tr>
				</table>
			</td>
		</tr>-->
		<tr>
			<td>
				<table>
					<tr>
						<td>
							<font size='4'>&nbsp;&nbsp;<b>Course</b>&nbsp;&nbsp;&nbsp;Diploma in Computer Engineering
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
		<td>
			<table border="1" width="100%" cellspacing="0">
				<tr><th><i>Subject code</i></th><th><i>Subject name</i></th><th><i>Min marks</i></th><th><i>Max marks<br>(500)</i></th><th><i>Marks obtained</i></th><th><i>Grade</i></th></tr>
				<tr><td>101</td><td>Programming in C</td><td>35</td><td>100</td><td><?php echo "$sub1"; ?></td><td><?php echo "$remark1"; ?></td></tr>
				<tr><td>102</td><td>Programming in C++</td><td>35</td><td>100</td><td><?php echo "$sub2"; ?></td><td><?php echo "$remark2"; ?></td></tr>
				<tr><td>103</td><td>Software Engineering</td><td>35</td><td>100</td><td><?php echo "$sub3"; ?></td><td><?php echo "$remark3"; ?></td></tr>
				<tr><td>104</td><td>Operating System</td><td>35</td><td>100</td><td><?php echo "$sub4"; ?></td><td><?php echo "$remark4"; ?></td></tr>
				<tr><td>105</td><td>Core Java</td><td>35</td><td>100</td><td><?php echo "$sub5"; ?></td><td><?php echo "$remark5"; ?></td></tr>
			
				<tr ><td colspan="4"><b>Total</b></td><td colspan="2"><b><?php echo "$total"; ?><b></td></tr>
				<tr ><td colspan="4"><b>Percentage</b></td><td colspan="2"><b><?php echo "$per %"; ?><b></td></tr>

			</table>
		</td>
		</tr>

		<tr>
		<td>
			<table>
				<tr><td><b><font size='4'>Result:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$s"; ?></font></b></td></tr>
			</table>
		</td>
		</tr>
	</table>
</center>

</html>
