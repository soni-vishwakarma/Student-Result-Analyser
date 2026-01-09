<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Micro Device</title>
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
											<?php include 'header_right_emenu.php';?>											
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
                                            <li><span class="bread-blod">Add Student</span>
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
			$s_id=(int)$_GET["s_id"];
			//$sql = "select * from admin where adm_id=".$adm_id;
			$sql = "select * from student WHERE s_id=1";
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
		?>
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Update FY Student</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-student" action="update_fy_student_code.php" method="post" class="add-student">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<!-- Left Section -->
                                                            <div class="form-group">
                                                                <input id="s_id" name="s_id" type="hidden" class="form-control" value="<?php echo $s_id; ?>" placeholder="ID">
                                                            </div>
															<div class="form-group">
                                                                <input id="s_name" name="s_name" type="text" class="form-control" value="<?php echo $s_name; ?>" placeholder="Name">
                                                            </div>
															<div class="form-group">
                                                                <input id="s_fn" name="s_fn" type="text" class="form-control" value="<?php echo $s_fn; ?>" placeholder="Father's Name">
                                                            </div>
															<div class="form-group">
                                                                <input id="s_mn" name="s_mn" type="text" class="form-control" value="<?php echo $s_mn; ?>" placeholder="Mother's Name">
                                                            </div>
															<div class="form-group">
                                                                <select id="s_gender" name="s_gender" class="form-control" value="<?php foreach ($_POST['$s_gender'] as $select)
																																	{
																																	echo $select;
																																	} ?>">
																	<option value="none" selected="" disabled="">Select Gender</option>
																	<option value="Male">Male</option>
																	<option value="Female">Female</option>
																</select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input id="s_dob" name="s_dob" type="text" class="form-control" value="<?php echo $s_dob; ?>" placeholder="Date of Birth">
                                                            </div>
															<div class="form-group">
                                                                <input id="s_mob" name="s_mob" type="text" class="form-control" value="<?php echo $s_mob; ?>" placeholder="Mobile Number" pattern="[1-9]{1}[0-9]{9}" max="10" >
                                                            </div>	
															<div class="form-group">
                                                                <input id="s_mail_id" name="s_mail_id" type="email" class="form-control" value="<?php echo $s_mail_id; ?>" placeholder="Email">
                                                            </div>
															<!-- Left Section Ends-->
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="form-group res-mg-t-15">
                                                                    <input type="textarea" id="s_address" name="s_address" value="<?php echo $s_address; ?>" placeholder="Address" style="height:143px;width:524px" >
                                                            </div>	
															<div class="form-group">
                                                                <input id="seatno" name="seatno" type="text" class="form-control" value="<?php echo $seatno; ?>" placeholder="Seat No" max="6">
                                                            </div>
															<div class="form-group">
                                                                <input name="institutename" id="institutename" type="text" class="form-control" value="<?php echo $institutename; ?>" placeholder="Institute Name">
                                                            </div>
															<div class="form-group">
                                                                <input name="instituteno" id="instituteno" type="text" class="form-control" value="<?php echo $instituteno; ?>" placeholder="Institute Code">
                                                            </div>	
															<div class="form-group">
                                                                <input name="centerno" id="centerno" type="text" class="form-control" value="<?php echo $centerno; ?>" placeholder="Center Number">
                                                            </div>
															<div class="form-group">
                                                                <input name="examyear" id="examyear" type="text" class="form-control" value="<?php echo $examyear; ?>" placeholder="Examination Year(2000-2001)" pattern="[2][0-9]{3}-[2][0-9]{3}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
																<button type="submit" class="btn btn-primary waves-effect waves-light" id="submit" name="submit" >Submit</button>
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