<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Micro Device </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'cssfile.php';?>
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="admin_dashboard.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="admin_dashboard.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
				<?php include 'leftmenu.php';?>                
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="admin_dashboard.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <?php include 'headermenu.php';?>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">                                            
											<?php include 'header_right_menu.php';?>											
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <?php include 'mobile_menu.php';?>								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="admin_dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Administrator</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!---------------------- Content Start -------------------->
		<?php	
			include 'database.php';
			$s_id=(int)$_GET['s_id'];
			//$sql = "SELECT sy1_student.s_id,sy1_student.s_name,sy1_student.seatno,sy_marks.sub1,sy_marks.sub2,sy_marks.sub3,sy_marks.sub4,sy_marks.sub5 FROM sy1_student JOIN sy_marks ON sy1_student.s_id=sy_marks.m_id";
			$sql = "select * from sy1_student where s_id=".$s_id;
			$res = mysqli_query($con,$sql);
			$result = array();

					while($row = mysqli_fetch_array($res))
				{ 
					$s_id=$row['s_id'];
					$s_name=$row['s_name'];					
					$seatno=$row['seatno'];
				}
			$sql1 = "select * from sy_marks where s_id=".$s_id;
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
		?>
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Update Marks</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-administrator" action="update_sy_marks_code.php" method="post" class="add-administrator">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<!-- Left Section -->
															<table style="border-collapse:separate;border-spacing: 0 15px;" >
																<tr><td>
																ID:<b> <?php echo $s_id; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																Name: <b><?php echo $s_name; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																Seat no: <b><?php echo $seatno; ?></b>
																</td>
																</tr>		
															</table>
																<table style="border-collapse:separate; border-spacing: 0 15px;" >
																	<tr>
																		<div class="form-group">
																		   <td><b>Advanced Java: </b> </td><td><input id="sub1" name="sub1" type="text" class="form-control" value="<?php echo $sub1;?>" placeholder=""></td>
																		</div>
																	</tr>
																	<tr>
																		<div class="form-group">
																		   <td><b>Python: </b> </td><td><input id="sub2" name="sub2" type="text" class="form-control" value="<?php echo $sub2;?>" placeholder=""></td>
																		</div>
																	</tr>
																	<tr>
																		<div class="form-group">
																			<td><b>PHP: </b> </td><td><input id="sub3" name="sub3" type="text" class="form-control" value="<?php echo $sub3;?>" placeholder=""></td>
																		</div>
																	</tr>
																	<tr>
																		<div class="form-group">
																			<td><b>Software Testing: </b> </td><td><input id="sub4" name="sub4" type="text" class="form-control" value="<?php echo $sub4;?>" placeholder=""></td>
																		</div>
																	</tr>
																	<tr>
																		<div class="form-group">
																			<td><b>Android: </b> </td><td><input type="text" id="sub5" name="sub5" class="form-control" value="<?php echo $sub5;?>" placeholder=""></td>
																		</div>
																	</tr>
																</table>
															<!-- Left Section Ends-->
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <!-- Right Section
															<div class="form-group">
                                                                <input name="phone" type="number" class="form-control" placeholder="Phone">
                                                            </div>
                                                            -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------- Content End -------------------->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<?php include 'footer.php';?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php include 'js_file.php';?>
</body>
</html>
<?php
if (isset($_GET['status'])) {
        $sta = $_GET['status'];
        echo "<script type='text/javascript'>alert('$sta');</script>";
	}
?>