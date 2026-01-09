<html>
<?php 					
	include 'database.php'; 
	$s_id=(int)$_GET['s_id'];
	$sql = "select * from sy1_student where s_id=".$s_id;
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
	$sql1 = "select * from fy_marks where s_id=".$s_id;
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
	$sql2 = "select * from sy_marks where s_id=".$s_id;
			//$sql = "select * from sy_student where s_id=1";
	$res2 = mysqli_query($con,$sql2);
	$result2 = array();
					while($row2 = mysqli_fetch_array($res2))
				{ 
					$sub6=$row2['sub1'];
					$sub7=$row2['sub2'];
					$sub8=$row2['sub3'];
					$sub9=$row2['sub4'];
					$sub10=$row2['sub5'];	
				}
	
	//-------Fy Start-------
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
	$s=str_replace('a and', '', $s);
	if($count>=1){
		$s="Fail";
	}else if($count==0){
		$s="Pass";
	}
	
	//-------Fy End-------
	
	//-------Sy Start-------
	$total1=$sub6+$sub7+$sub8+$sub9+$sub10;
	$per1=($total1*100)/500;
	$grade6=0;
	$grade7=0;
	$grade8=0;
	$grade9=0;
	$grade10=0;
	$count1=0;
	$s1="a";
	//$s2="b ";
	$gen1='';
	$min1=35;
	$max1=100;
	
	if($sub6<35 && $sub6>0){
		$remark11="D";
		$count1++;
		$s1=$s1.' and ';
	}else if($sub6>80){
		$remark11="A";
	}
	else if($sub6>60){
		$remark11="B";
	}
	else if($sub6>35){
		$remark11="C";
	}else{
		$remark11='';
	}
	
	if($sub7<35 && $sub7>0){
		$remark12="D";
		$count1++;
		$s1=$s1.' and ';
	}else if($sub7>80){
		$remark12="A";
	}
	else if($sub7>60){
		$remark12="B";
	}
	else if($sub7>35){
		$remark12="C";
	}else{
		$remark12='';
	}
	
	if($sub8<35 && $sub8>0){
		$remark13="D";
		$count1++;
		$s1=$s1.' and ';
	}else if($sub8>80){
		$remark13="A";
	}
	else if($sub8>60){
		$remark13="B";
	}
	else if($sub8>35){
		$remark13="C";
	}else{
		$remark13='';
	}
	
	if($sub9<35 && $sub9>0){
		$remark14="D";
		$count1++;
		$s1=$s1.' and ';
	}else if($sub9>80){
		$remark14="A";
	}
	else if($sub9>60){
		$remark14="B";
	}
	else if($sub9>35){
		$remark14="C";
	}else{
		$remark14='';
	}
	if($sub10<35 && $sub10>0){
		$remark15="D";
		$count1++;
		$s1=$s1.' and ';
	}else if($sub10>80){
		$remark15="A";
	}
	else if($sub10>60){
		$remark15="B";
	}
	else if($sub10>35){
		$remark15="C";
	}else{
		$remark15='';
	}
	
	$s1=str_replace('a and', '', $s1);
	if($count1>=1){
		$s1="Fail";
	}else if($count1==0){
		$s1="Pass";
	}
	$s2="b ";
	if($s=="Pass" and $s1=="Pass")
	{
		$s2=str_replace("b ", 'Pass', $s2);
	}
	else if($s=="Pass" and $s1=="Fail")
	{
		$s2=str_replace("b ", 'Fail', $s2);
	}
	else if($s=="Fail" and $s1=="Pass")
	{
		$s2=str_replace("b ", 'Upheldl', $s2);
	}
	else if($s=="Fail" and $s1=="Fail")
	{
		$s2=str_replace("b ", 'Fail', $s2);
	}
	
		
	//-------Fy End-------
	
?>
<center>
	<table border=1 cellspacing=0>
		<tr>
			<td>
				<table  width=100%>
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
				<?php echo "<b>SECOND YEAR</b>";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
			<table border=1 width=100% cellspacing=0>
				<tr><th><i>Subject code</i></th><th><i>Subject name</i></th><th><i>Min marks</i></th><th><i>Max marks<br>(500)</i></th><th><i>Marks obtained</i></th><th><i>Grade</i></th></tr>
				<tr><td>201</td><td>Advanced Java</td><td>35</td><td>100</td><td><?php echo "$sub6"; ?></td><td><?php echo "$remark11"; ?></td></tr>
				<tr><td>202</td><td>Python</td><td>35</td><td>100</td><td><?php echo "$sub7"; ?></td><td><?php echo "$remark12"; ?></td></tr>
				<tr><td>203</td><td>PHP</td><td>35</td><td>100</td><td><?php echo "$sub8"; ?></td><td><?php echo "$remark13"; ?></td></tr>
				<tr><td>204</td><td>Software Testing</td><td>35</td><td>100</td><td><?php echo "$sub9"; ?></td><td><?php echo "$remark14"; ?></td></tr>
				<tr><td>205</td><td>Android</td><td>35</td><td>100</td><td><?php echo "$sub10"; ?></td><td><?php echo "$remark15"; ?></td></tr>
			
				<tr ><td colspan="4"><b>Total</b></td><td colspan="2"><b><?php echo "$total1"; ?><b></td></tr>
				<tr ><td colspan="4"><b>Percentage</b></td><td colspan="2"><b><?php echo "$per1 %"; ?><b></td></tr>

			</table>
		</td>
		</tr>

		<tr>
		<td>
			<table>
				<tr><td><b><font size='4'>Result:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$s2"; ?></font></b></td></tr>
			</table>
		</td>
		</tr>
	</table>
</center>

</html>
