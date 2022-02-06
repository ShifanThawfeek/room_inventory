<?php include "includes/db.php"; ?>

<?php include "includes/header.php"; ?>

<?php include "includes/navbar.php"; ?>

<?php include "includes/page_header.php"; ?>


<!-- Page content -->
<div class="page-content pt-0">

	<!-- Main sidebar -->
	<?php include "includes/main_sidebar.php"; ?>
	<!-- /main sidebar -->


	<!-- Main content -->
	<div class="content-wrapper">

		<!-- Content area -->
		<div class="content">

			<!-- Main charts -->
			<div class="">
				<div class="col-md-12">
					<h1>ADD PAYMENT</h1><br>
				</div>

				<div class="form-group">

					<div class="row">
						<div class="col-md-1"></div>

						<div class="col-md-3">
							<select name="search_type" id="search_type" class="form-control">
								<option value="name">Name</option>
								<option value="reg_no">Reg No.</option>
								<option value="mobile">Mobile Number</option>
								<option value="nic">NIC</option>
							</select>
						</div>

						<div class="col-md-5">
							<select name="search" id="search" class="form-control">
								<option value="">Shilmy</option>
								<option value="">Name</option>
								<option value="">Shahid</option>
								<option value="">Shermal</option>
							</select>
						</div>
						<br>

					</div>
				</div>


				<div class="form-group">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-2">
							<h6><b> Reg No.:</b></h6>
						</div>
						<div class="col-md-3">
							<h6>DL/102/445</h6>
						</div>
						<div class="col-md-2">
							<h6><b> Entered Date:</b></h6>
						</div>
						<div class="col-md-4">
							<h6>20-12-2021</h6>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-2">
							<h6><b> Name:</b></h6>
						</div>
						<div class="col-md-3">
							<h6>Shilmy Yoosuf </h6>
						</div>
						<div class="col-md-2">
							<h6><b> Contact No.:</b></h6>
						</div>
						<div class="col-md-4">
							<h6>0772002157</h6>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-2">
							<h6><b> Room No.:</b></h6>
						</div>
						<div class="col-md-3">
							<h6>102</h6>
						</div>
						<div class="col-md-2">
							<h6><b> Category:</b></h6>
						</div>
						<div class="col-md-4">
							<h6>Single</h6>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-2">
							<h6><b> Monthly Rental:</b></h6>
						</div>
						<div class="col-md-3">
							<h6>6500.00</h6>
						</div>
						<div class="col-md-2">
							<h6><b> Status:</b></h6>
						</div>
						<div class="col-md-4">
							<h6>Active</h6>
						</div>
					</div>

				</div>
				<br>
				<div class="form-group">

					<div class="row">
						<div class="col-md-1"> </div>
						<div class="col-md-1">
							<h5>Date</h5>
						</div>
						<div class="col-md-3">
							<input type="date" name="room_entered_date" id="room_entered_date" class="form-control pickadate-accessibility rounded-right " placeholder="Select Date">
						</div>

						<div class="col-md-1">
							<h5>Type</h5>
						</div>
						<div class="col-md-3">
							<select name="type" id="type" class="form-control">
								<option value="Room_Rent">Room Rent</option>
								<option value="Extra">Extra</option>
								<option value="Adjustment">Adjustment</option>
							</select>
						</div>
					</div>
				</div>


				<div class="form-group">
					<div class="row">
						<div class="col-md-1"> </div>
						<div class="col-md-2">
							<h5>Amount</h5>
						</div>
						<div class="col-md-5">
							<input type="number" name="amount" id="amount" class="form-control" placeholder="Amount">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-1"> </div>
						<div class="col-md-2">
							<h5>Remark</h5>
						</div>
						<div class="col-md-5">
							<textarea id="remark" name="remark" rows="3" class="form-control" placeholder="Remark"></textarea>
						</div>
					</div>
				</div>


				<div class="row">

					<div class="col-md-2">
						<button class="btn btn-secondary">Back</button>
					</div>
					<div class="col-md-8 text-right">
						<button type="print" class="btn btn-purple">Print</button>
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</div>



			</div>
			<!-- /dashboard content -->

		</div>
		<!-- /content area -->

	</div>
	<!-- /main content -->

</div>
<!-- /page content -->

<!-- Footer -->
<div class="navbar navbar-expand-lg navbar-light">
	<div class="text-center d-lg-none w-100">
		<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
			<i class="icon-unfold mr-2"></i>
			Footer
		</button>
	</div>

	<div class="navbar-collapse collapse" id="navbar-footer">
		<span class="navbar-text">
			&copy; <script>
				document.write(new Date().getFullYear())
			</script> Room Inventory
		</span>

		<!--  <ul class="navbar-nav ml-lg-auto">
                 <li>Designed and Developed by <a href="#">Shilmy Y</a></li>
             </ul>-->
	</div>
</div>
<!-- /footer -->



<!-- Core JS files -->
<script src="./global_assets/js/main/jquery.min.js"></script>
<script src="./global_assets/js/main/bootstrap.bundle.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="./global_assets/js/plugins/visualization/d3/d3.min.js"></script>
<script src="./global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
<script src="./global_assets/js/plugins/ui/moment/moment.min.js"></script>
<script src="./global_assets/js/plugins/pickers/daterangepicker.js"></script>
<script src="./global_assets/js/plugins/pickers/pickadate/picker.js"></script>
<script src="./global_assets/js/plugins/pickers/pickadate/picker.date.js"></script>
<script src="./global_assets/js/plugins/pickers/pickadate/picker.time.js"></script>
<script src="./global_assets/js/plugins/pickers/pickadate/legacy.js"></script>

<script>
	// Accessibility labels
	$('.pickadate-accessibility').pickadate({
		labelMonthNext: 'Go to the next month',
		labelMonthPrev: 'Go to the previous month',
		labelMonthSelect: 'Pick a month from the dropdown',
		labelYearSelect: 'Pick a year from the dropdown',
		selectMonths: true,
		selectYears: 200,
		formatSubmit: 'yyyy-mm-dd',
	});
</script>

<script src="./assets/app-admin.js"></script>
<script src="./global_assets/js/demo_pages/dashboard.js"></script>
<!--<script src="./global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js"></script>
    <script src="./global_assets/js/demo_charts/pages/dashboard/light/sparklines.js"></script>
    <script src="./global_assets/js/demo_charts/pages/dashboard/light/lines.js"></script>
    <script src="./global_assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
    <script src="./global_assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
    <script src="./global_assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
    <script src="./global_assets/js/demo_charts/pages/dashboard/light/progress.js"></script>
    <script src="./global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js"></script>
    <script src="./global_assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
    <script src="./global_assets/js/demo_charts/pages/dashboard/light/bullets.js"></script> -->
<!-- /theme JS files -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-colvis-2.1.1/b-html5-2.1.1/b-print-2.1.1/r-2.2.9/datatables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
		$('.employees').DataTable();
	});
</script>
<script>
	setInterval(function() {
		$('#moment_clock').html(moment().format('dddd, MMMM DD YYYY H:mm:ss A'));
	}, 1000)
</script>



</body>

</html>