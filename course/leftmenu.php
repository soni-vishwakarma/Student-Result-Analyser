 <nav class="sidebar-nav left-sidebar-menu-pro">
	<ul class="metismenu" id="menu1">
		<!------- Dashboard ------------>
		<li class="active">
			<a href="admin_dashboard.php">
				   <span class="fa fa-dashboard"></span>
				   <span class="mini-click-non">Dashboard</span>
			</a>			
		</li>
		<!------- Dashboard Ends------------>
		<li>
			<a class="has-arrow">
				   <span class="fa fa-users icon-wrap"></span>
				   <span class="mini-click-non">Users</span>
			</a>
			<ul class="submenu-angle" aria-expanded="false">
				<li>
					<a class="has-arrow" aria-expanded="false">
						<span class="fa fa-user-md icon-wrap"></span> 
						<span class="mini-click-non">Administrator</span>
					</a>
					<ul class="submenu-angle" aria-expanded="false">
						<li><a title="All Administrators" href="all_administrator.php"><span class="mini-sub-pro">All Administrators</span></a></li>
						<li><a title="Add Administrator" href="add_administrator.php"><span class="mini-sub-pro">Add Administrator</span></a></li>
						<li><a title="Edit Administrator" href="edit_administrator.php"><span class="mini-sub-pro">Edit Administrator</span></a></li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" aria-expanded="false">
					<span class="fa fa-user icon-wrap"></span> 
					<span class="mini-click-non">Employee</span>
					</a>
					<ul class="submenu-angle" aria-expanded="false">
						<li><a title="All Employee" href="all_emp.php"><span class="mini-sub-pro">All Employee</span></a></li>
						<li><a title="Add Employee" href="add_emp.php"><span class="mini-sub-pro">Add Employee</span></a></li>
						<li><a title="Edit Employee" href="edit_emp.php"><span class="mini-sub-pro">Edit Employee</span></a></li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" aria-expanded="false">
					<span class="educate-icon educate-student icon-wrap"></span> 
					<span class="mini-click-non">Students</span></a>
					<ul class="submenu-angle" aria-expanded="false">
						<li><a title="All Students" href="all_student.php"><span class="mini-sub-pro">All Students</span></a></li>
						<li><a title="Add Student" href="add_student.php"><span class="mini-sub-pro">Add Student</span></a></li>
						<li><a title="Edit Student" href="edit_student.php"><span class="mini-sub-pro">Edit Student</span></a></li>
						<li><a title="Print Student List" href="print_student_list.php"><span class="mini-sub-pro">Print Student List</span></a></li>
					</ul>
				</li>
				<a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                    <ul id="democrou" class="collapse dropdown-header-top">
                        <li><a href="all-courses.html">All Courses</a>
                        </li>
                        <li><a href="add-course.html">Add Course</a>
                        </li>
                        <li><a href="edit-course.html">Edit Course</a>
                        </li>
                        <li><a href="course-profile.html">Courses Info</a>
                        
                    </ul>
                
			</ul>			
		</li>
		<!--- Users Ends --->
	</ul>
</nav>