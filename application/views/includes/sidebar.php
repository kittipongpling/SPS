<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
			<div class="sidebar-brand-icon rotate-n-15">
				<i class="fas fa-laugh-wink"></i>
			</div>
			<div class="sidebar-brand-text mx-3">SPS<sup>กำลังใจ</sup></div>
		</a>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item active">
			<a class="nav-link" href="index.html">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>หน้าแรก</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			#######
		</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
				aria-expanded="true" aria-controls="collapseTwo">
				<i class="fas fa-fw fa-cog"></i>
				<span>เจ้าหน้าที่กองกลาง</span>
			</a>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Custom Components:</h6>
					<a class="collapse-item" href="<?php echo site_url(); ?>/admin/address">จัดการที่พักอาศัย</a>
					<a class="collapse-item" href="<?php echo site_url(); ?>/admin/user">จัดการข้อมูลผู็พักอาศัย</a>
					<a class="collapse-item" href="<?php echo site_url(); ?>/admin/ifm">จัดการแจ้งประชาสัมพันธ์</a>
					<a class="collapse-item" href="<?php echo site_url(); ?>/admin/repair">ผลการแก้ไข</a>
					<a class="collapse-item" href="<?php echo site_url(); ?>/admin/history">แสดงสถิติการเข้าพัก</a>
				</div>
			</div>
		</li>

		<!-- Nav Item - Utilities Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
				aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-fw fa-wrench"></i>
				<span>กรรมการหอหัก</span>
			</a>
			<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
				data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Custom Utilities:</h6>
					<a class="collapse-item" href="<?php echo site_url(); ?>/director/save_bear">บันทึกการรับเงิน</a>
					<a class="collapse-item" href="<?php echo site_url(); ?>/director/save_pay">บันทึกรายการจ่ายเงิน</a>
					<a class="collapse-item" href="<?php echo site_url(); ?>/director/repair">ตอบผลการแก้ไข</a>
				</div>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="true"
				aria-controls="user">
				<i class="fas fa-fw fa-wrench"></i>
				<span>ผู้พักอาศัย</span>
			</a>
			<div id="user" class="collapse" aria-labelledby="user" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Custom Utilities:</h6>
					<a class="collapse-item" href="<?php echo site_url(); ?>/user/save_water">บันทึกหน่วยการใช้น้ำ</a>
					<a class="collapse-item" href="<?php echo site_url(); ?>/user/summary">สรุปค่าใช้จ่าย</a>
					<a class="collapse-item" href="<?php echo site_url(); ?>/user/problem">แจ้งปัญหาห้องพัก</a>
				</div>
			</div>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Addons
		</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" aria-expanded="true" aria-controls="collapsePages">
				<i class="fas fa-fw fa-power-off"></i>

				<span>ออกจากระบบ</span>
			</a>

		</li>

		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

		<!-- Sidebar Message -->


	</ul>
	<!-- End of Sidebar -->
