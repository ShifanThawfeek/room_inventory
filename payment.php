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
			<div class="d-flex justify-content-between">
				<h2> PAYMENTS</h2>
				<a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
				<a href="add_payment.php" class="btn btn-primary">Add Payment</a>

			</div>

			<!-- Main charts -->
			<div class="row">

				<div class="col-md-12 pt-5">

					<table class="table table-bordered employees">
						<thead>
							<tr>
								<th>Date</th>
								<th>Name</th>
								<th>Contact No.</th>
								<th>Room No.</th>
								<th>Category</th>
								<th>Outstanding</th>
								<th>Type</th>
								<th>Amount</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>

							<?php
							$query = "SELECT * FROM payment";
							$get_all_payments_query = mysqli_query($connection, $query);

							if (!$get_all_payments_query) {
								die("get_all_payments_query failed " . mysqli_error($connection));
							}

							while ($row = mysqli_fetch_assoc($get_all_payments_query)) {
								$id = $row['id'];
								$date = $row['date'];
								$type = $row['type'];
								$amount = $row['amount'];
								$remark = $row['remark'];

								$payment_account_id = $row['account_id'];
								$query = "SELECT accounts.name, accounts.mobile
								FROM accounts
								INNER JOIN payment ON $payment_account_id = accounts.id";
								$find_account_name_query = mysqli_query($connection, $query);
								if (!$find_account_name_query) {
									die("find_account_name_query failed" . mysqli_error($connection));
								}
								while ($row = mysqli_fetch_assoc($find_account_name_query)) {
									$account_name = $row['name'];
									$account_mobile = $row['mobile'];
								}


								echo "<tr>";
								echo "<td>$date</td>";
								echo "<td>$account_name</td>";	//account_id 
								echo "<td>$account_mobile</td>"; //account_id
								echo "<td>102</td>";	//room no
								echo "<td>-Single</td>"; //cat_type
								echo "<td>-6500.00</td>"; //outstamding
								echo "<td>$type</td>";
								echo "<td>-3500.00</td>"; //amount

								// <td>
								// 	<strong class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer">Actions</strong>
								// 	<div class="dropdown-menu">
								// 		<a class="dropdown-item" href="view_payment.html">View</a>
								// 		<div role="separator" class="dropdown-divider"></div>
								// 		<a class="dropdown-item" href="edit_payment.html">Edit</a>
								// 		<div role="separator" class="dropdown-divider"></div>
								// 		<a class="dropdown-item text-danger" href="#">Delete</a>
								// 		<div role="separator" class="dropdown-divider"></div>
								// 		<a class="dropdown-item" href="#">Print</a>
								// 	</div>
								// </td>
								echo "</tr>";
							}
							?>



						</tbody>
					</table>

				</div>

			</div>
			<!-- /dashboard content -->

		</div>
		<!-- /content area -->

	</div>
	<!-- /main content -->

</div>
<!-- /page content -->

<?php include "includes/footer.php"; ?>