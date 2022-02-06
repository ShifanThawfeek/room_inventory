<?php include "includes/db.php"; ?>

<?php include "includes/header.php"; ?>

<?php include "includes/navbar.php"; ?>

<?php include "includes/page_header.php"; ?>

<!-- Allow only if logged -->
<?php
if (!isset($_SESSION['name'])) {
	header("Location: http://localhost/room_inventory/login.php");
}
?>


<!-- Page content -->
<div class="page-content pt-0">

	<?php include "includes/main_sidebar.php"; ?>

	<!-- Main content -->
	<div class="content-wrapper">

		<!-- Content area -->
		<div class="content">
			<div class="d-flex justify-content-between">
				<h2> ACCOUNT</h2>
				<a href="add_account.html" class="btn btn-primary">Add Account</a>
			</div>
			<br>
		</div>



		<!-- Main charts -->
		<div class="row">
			<div class="col-md-12 pt-5">

				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th>Reg No.</th>
							<th>Name</th>
							<th>Room No.</th>
							<th>NIC</th>
							<th>Mobile</th>
							<th>Category</th>
							<th>Outstanding</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php
						$query = "SELECT * FROM accounts ORDER BY id DESC";
						$select_all_accounts_query = mysqli_query($connection, $query);

						if (!$select_all_accounts_query) {
							die("select_all_accounts_query failed " . mysqli_error($connection));
						}

						while ($row = mysqli_fetch_assoc($select_all_accounts_query)) {

							$id = $row['id'];
							$reg_no = $row['reg_no'];
							$name = $row['name'];
							$nic = $row['nic'];
							$address = $row['address'];
							$mobile  = $row['mobile'];
							$secondary_contact = $row['secondary_contact'];
							$email = $row['email'];
							$room_id  = $row['room_id'];
							$room_category = $row['room_category'];
							$advance_payment = $row['advance_payment'];
							$monthly_rental = $row['monthly_rental'];
							$room_entered_date = $row['room_entered_date'];
							$outstanding = $row['outstanding'];
							$status = $row['status'];
							$created_by = $row['created_by'];
							$created_at = $row['created_at'];
							$updated_by = $row['updated_by'];
							$updated_at = $row['updated_at'];

							// ACCOUNTS ->  Roon No. - should show the room_no table room_no not the id
							$query = "SELECT room_no FROM room_no WHERE $room_id = id";
							$select_room_no_from_room_no_table_query = mysqli_query($connection, $query);

							if (!$select_room_no_from_room_no_table_query) {
								die("select_room_no_from_room_no_table_query failed " . mysqli_error($connection));
							}

							while ($row = mysqli_fetch_assoc($select_room_no_from_room_no_table_query)) {
								$room_no = $row['room_no'];
							}


							echo "<tr>";
							echo "<td>$reg_no</td>";
							echo "<td>$name</td>";
							echo "<td>$room_no</td>";
							echo "<td>$nic</td>";
							echo "<td>$mobile</td>";

							echo "<td>$room_category</td>";



							echo "<td>$outstanding</td>";

							// ACCOUNTS ->  Status - Inactivate should show <span class="badge badge-danger">Inactive</span>
							if ($status == 'Active') {
								echo "<td><span class='badge badge-success'>$status</span></td>";
							} else {
								echo "<td><span class='badge badge-danger'>$status</span></td>";
							}
							echo "<td><strong class='dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='cursor: pointer'>Actions</strong><div class='dropdown-menu'><a class='dropdown-item text-success' href='view_account.php?id={$id}'>View</a><div role='separator' class='dropdown-divider'></div><a class='dropdown-item' href='edit_account.php?id={$id}'>Edit</a><div role='separator' class='dropdown-divider'></div><a class='dropdown-item' href='#'>Print</a></div></td>";
							echo "</tr>";
						}

						?>
					</tbody>
					<tfoot>
						<tr>
							<th>Reg No.</th>
							<th>Name</th>
							<th>Room No.</th>
							<th>NIC</th>
							<th>Mobile</th>
							<th>Category</th>
							<th>Outstanding</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</tfoot>
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