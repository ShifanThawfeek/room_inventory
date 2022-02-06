<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Add Account - Room Inventory</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="./global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="./assets/all.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-colvis-2.1.1/b-html5-2.1.1/b-print-2.1.1/r-2.2.9/datatables.min.css"/>

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-lg navbar-dark bg-indigo navbar-static shadow-none">
		<div class="d-flex flex-1 d-lg-none">
			<button type="button" class="navbar-toggler sidebar-mobile-main-toggle">
				<i class="icon-transmission"></i>
			</button>
			<button data-target="#navbar_search" type="button" class="navbar-toggler" data-toggle="collapse">
				<i class="icon-search4"></i>
			</button>
		</div>

		<div class="text-center text-lg-left">
			<a href="index.html" class="d-inline-block">
				<img src="./global_assets/images/room_inventory_longLogo.png" class="d-none d-sm-block" alt="" style="height: 1.8rem !important; margin-top: 12px">
				<img src="./global_assets/images/room_inventory_longLogo.png" class="d-sm-none" alt="">
			</a>
		</div>

		<div class="collapse navbar-collapse order-2 order-lg-1" id="navbar_search">
			<div class="navbar-search d-flex align-items-center py-3 py-lg-0">
				
			</div>
		</div>

		<div class="order-1 order-lg-2 d-flex flex-1 flex-lg-0 justify-content-end align-items-center">
			<span id="moment_clock"></span>

			<ul class="navbar-nav flex-row align-items-center h-100 ml-3">
				

				<li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100">
					<a href="#" class="navbar-nav-link navbar-nav-link-toggler dropdown-toggle d-inline-flex align-items-center h-100" data-toggle="dropdown">
						<img src="./global_assets/images/avatar.png" class="rounded-pill" height="34" alt="">
						
					</a>

					<div class="dropdown-menu dropdown-menu-right wmin-lg-250 py-2">
                       <div class="text-center">
                           <a href="#" class="mt-2">
                               <img src="./global_assets/images/avatar.png" class="rounded-circle" alt="" style="width: 20%">
                           </a>

                           <div class="sidebar-resize-hide flex-1">
                               <div class="font-weight-semibold">Shilmy Yoosuf</div>
                               <div class="font-size-sm line-height-sm text-muted">
                                   shilmy@test.com
                               </div>
                           </div>
                       </div>

                        <hr>						

                        <div class="dropdown-item d-flex py-2">
							<div class="flex-1">
								<div class="font-weight-semibold">
                                    Log Out
                                </div>
							</div>
                            <span class="btn btn-dark-100 btn-icon btn-sm text-body border-transparent rounded-pill ml-1">
								<i class="icon-arrow-right8"></i>
							</span>
						</div>

					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page header -->
	<div class="page-header">
		

		<div class="page-header-content header-elements-lg-inline">
			<div class="page-title d-flex">
				<!-- <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
				<a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a> -->
			</div>

		</div>
	</div>
	<!-- /page header -->


	<!-- Page content -->
	<div class="page-content pt-0">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-lg align-self-start">

			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- Header -->
				<div class="sidebar-section sidebar-header">
					<div class="sidebar-section-body d-flex align-items-center justify-content-center pb-0">
						<h6 class="sidebar-resize-hide flex-1 mb-0">Navigation</h6>
						<div>
							<button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
								<i class="icon-transmission"></i>
							</button>

							<button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
								<i class="icon-cross2"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- /header -->


				<!-- User menu -->
				<div class="sidebar-section sidebar-user">
					<div class="sidebar-section-body d-flex justify-content-center">

					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header pt-0"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.html" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-user"></i> <span>Account</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="account.html" class="nav-link"><i class="icon-users4"></i>Accounts</a></li>
								<li class="nav-item"><a href="add_account.html" class="nav-link"><i class="icon-user-plus"></i>Add Account</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-wallet"></i> <span>Payment</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="payment.html" class="nav-link"><i class="icon-cash3"></i>Payments</a></li>
								<li class="nav-item"><a href="add_payment.html" class="nav-link"><i class="icon-cash2"></i>Add Payment</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-store2"></i> <span>Rent</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="rent.html" class="nav-link"><i class="icon-cart-add"></i>Rents</a></li>
								<li class="nav-item"><a href="rent_generation.html" class="nav-link"><i class="icon-coins"></i>Generate Rent</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-files-empty2"></i> <span>Report</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="paymnet_report.html" class="nav-link"><i class="icon-file-text3"></i>Payment</a></li>
								<li class="nav-item"><a href="outstanding_report.html" class="nav-link"><i class="icon-file-stats2"></i>Outstanding</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-reading"></i> <span>Administration</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="rooms.html" class="nav-link"><i class="icon-store"></i>Rooms</a></li>
								<li class="nav-item"><a href="sms.html" class="nav-link"><i class="icon-mobile"></i>SMS</a></li>
								<li class="nav-item"><a href="audit_log.html" class="nav-link"><i class="icon-clipboard3"></i>Audit Log</a></li>
							</ul>
						</li>


					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

				<!-- Main charts -->
				<div class="">
					<div class="col-md-12">
						<h1>ACCOUNT REGISTRATION</h1><br>
					</div>
					
					<div class="col-md-12">

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Reg No.:
								</div>
								<div class="col-md-6">
									<strong>DL/102/445</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Name:
								</div>
								<div class="col-md-6">
									<strong>Shilmy Yoosuf</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Mobile Number:
								</div>
								<div class="col-md-6">
									<strong>0777961175</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									NIC:
								</div>
								<div class="col-md-6">
									<strong>891563528V</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Address:
								</div>
								<div class="col-md-6">
									<strong>120, Galle Road, Dhehhiwala.</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Email:
								</div>
								<div class="col-md-6">
									<strong>shilmy@gmail.com</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Secondary Contact No.:
								</div>
								<div class="col-md-6">
									<strong>0115622563</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Room No.:
								</div>
								<div class="col-md-6">
									<strong>1001</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Category:
								</div>
								<div class="col-md-6">
									<strong>Single</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Advance Payment:
								</div>								
								<div class="col-md-6">
									<strong>6000.00</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Monthly Rental:
								</div>								
								<div class="col-md-6">
									<strong>6500.00</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Room Entered Date:
								</div>								
								<div class="col-md-6">
									<strong>05/02/20222</strong>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									Status:
								</div>								
								<div class="col-md-6">
									<span class="badge badge-success">Active</span>
								</div>
							</div>
						</div>

						<div class="form-group mt-5">
							<div class="row">
								<div class="col-md-1"> </div>
								<div class="col-md-3">
									<button class="btn btn-secondary">Back</button>
								</div>								
								<div class="col-md-3 text-right">
									<button type="print" class="btn btn-purple">Print</button>
								</div>
							</div>
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
				&copy; <script>document.write(new Date().getFullYear())</script> Room Inventory
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
	} );
	</script>
	<script>
		setInterval(function () {
			$('#moment_clock').html(moment().format('dddd, MMMM DD YYYY H:mm:ss A'));
		}, 1000)
	</script>
	
	

</body>
</html>
