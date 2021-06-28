
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">หน้าแรก</h1>

	</div>

	<!-- Content Row -->
	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								จำนวนสมาชิกทั้งหมด</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php foreach($user_count as $row){
								echo $row->COUNT;
							} ?> คน</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								จำนวนผู้ใช้งาน</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">5 คน</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">สถานะ
							</div>
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
								</div>
								<div class="col">
									<div class="progress progress-sm mr-2">
										<div class="progress-bar bg-info" role="progressbar" style="width: 50%"
											aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Requests Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								การแจ้งซ่อม</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-comments fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Row -->

	<div class="row">

		<!-- Area Chart -->
		<div class="col-xl col-lg">
			<div class="container-fluid">

				<!-- Page Heading -->


				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">ข่าวประชาสัมพันธ์</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>หัวเรื่อง</th>
										<th>รายละเอียด</th>
										<th>รูปภาพ</th>

									</tr>
								</thead>
								<!-- <tfoot>
									<tr>
										<th>หัวเรื่อง</th>
										<th>รายละเอียด</th>
										<th>รูปภาพ</th>

									</tr>
								</tfoot> -->
								<tbody>
								<?php
foreach ($table as $row)
{ ?>
									<tr>
										<td><?php echo $row->ifm_name; ?></td>
										<td><?php echo $row->ifm_detail; ?></td>
										<td>รูปภาพ</td>

									</tr>
									
									<?php
}
?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Pie Chart -->

	</div>

	<!-- Content Row -->
	<div class="row">

		<!-- Content Column -->
		<div class="col-lg-6 mb-4">

			<!-- Project Card Example -->


			<!-- Color System -->


		</div>


	</div>

</div>
<!-- /.container-fluid -->
