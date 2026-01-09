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
                                            <li><span class="bread-blod">Dashboard</span>
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
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1 style="color:blue">Course <span class="table-project-n">Data</span></h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="coursecode">Course code</th>
                                                <th data-field="coursename" data-editable="true">Course Name</th>
                                                <th data-field="coursestartdate" data-editable="true">Course Start Date</th>
                                                <th data-field="courseduration" data-editable="true">Course Duration</th>
                                                <th data-field="courseexamdate" data-editable="true">Course Exam Date</th>
                                                <th data-field="department" data-editable="true">Department</th>
                                                <th data-field="coursemarks" data-editable="true">Course Marks</th>
                                                <th data-field="year" data-editable="true">Year</th>
                                                <th data-field="action">Setting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 					
												include '../database.php'; 

												$sql = "select * from course";
												
												$res = mysqli_query($con,$sql);
												 
												$result = array();

														while($row = mysqli_fetch_array($res))
													{
														print "<tr><td></td><td>";
														echo $row['coursecode']; 
														print "</td> <td>";
														echo $row['coursename']; 
														print "</td> <td>";
														echo $row['finish']; 
														print "</td> <td>";
														echo $row['duration']; 
														print "</td> <td>";
														echo $row['courseExam']; 
														print "</td> <td>";
														echo $row['department']; 
														print "</td> <td>";
														echo $row['coursemarks']; 
														print "</td> <td>";
														echo $row['year']; 
														print "</td> <td>";
														$temp = "./update_course.php?coursecode=".$row['coursecode'];
														print "<a href='$temp'><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button></a>";
														$temp = "./delete_course_code.php?adm_id=".$row['adm_id'];
														print "<a href='$temp'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'></i></button></a></td></tr>";
														}
											?>                                            
                                        </tbody>
                                    </table>
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