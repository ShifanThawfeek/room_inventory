<?php session_start(); ?>	
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
								<div class="font-weight-semibold"><?php echo $_SESSION['name']; ?></div>
								<div class="font-size-sm line-height-sm text-muted">
									<!-- shilmy@test.com -->
									<?php echo $_SESSION['email']; ?>
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
							<a href="http://localhost/room_inventory/logout.php">
								<span class="btn btn-dark-100 btn-icon btn-sm text-body border-transparent rounded-pill ml-1">
									<i class="icon-arrow-right8"></i>
								</span>
							</a>
						</div>


					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->