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

			<!-- Main charts -->
			<div class="">
				<div class="col-md-12">
					<h1>ACCOUNT REGISTRATION</h1><br>
					<?php

					if (isset($_POST['submit'])) {
						$reg_no = $_POST['reg_no'];
						$name = $_POST['name'];
						$mobile = $_POST['mobile'];
						$nic = $_POST['nic'];
						$address = $_POST['address'];
						$email = $_POST['email'];
						$secondary_contact = $_POST['secondary_contact'];
						$room_id = $_POST['room_id'];
						$room_category = $_POST['room_category'];
						$advance_payment = $_POST['advance_payment'];
						$monthly_rental = $_POST['monthly_rental'];
						$room_entered_date = $_POST['room_entered_date'];
						$status = $_POST['status'];

						//Dupliacte check - reg no.
						$query = "SELECT * FROM accounts WHERE reg_no = '$reg_no'";
						$check_reg_no_exists_query = mysqli_query($connection, $query);
						if (mysqli_num_rows($check_reg_no_exists_query) > 0) {
							echo "<p style='color: red'>Reg No. already exists</p>";
						}

						//Dupliacte check - mobile
						$query = "SELECT * FROM accounts WHERE mobile = '$mobile'";
						$check_mobile_exists_query = mysqli_query($connection, $query);
						if (mysqli_num_rows($check_mobile_exists_query) > 0) {
							echo "<p style='color: red'>Mobile no. already exists</p>";
						}


						//Dupliacte check - Email
						$query = "SELECT * FROM accounts WHERE email= '$email'";
						$check_email_exists_query = mysqli_query($connection, $query);
						if (mysqli_num_rows($check_email_exists_query) > 0) {
							echo "<p style='color: red'>Email already exists</p>";
						}



						//Dupliacte check - NIC
						if ($nic == '') {
							//insert recored if NIC is NULL, do not duplication chck
							$nic = null;

							$query = "INSERT INTO `accounts` ( `reg_no`, `name`, `nic`, `address`, `mobile`, `secondary_contact`, `email`, `room_id`, `room_category`, `advance_payment`, `monthly_rental`, `room_entered_date`, `status`, `created_by`) 
							VALUES ( '{$reg_no}', '{$name}', NULL, '{$address}', '{$mobile}', '{$secondary_contact}', '{$email}', '{$room_id}', '{$room_category}', '{$advance_payment}', '{$monthly_rental}', '{$room_entered_date}', '{$status}',  {$_SESSION['id']}) ";

							$insert_account_registration_query = mysqli_query($connection, $query);

							if (!$insert_account_registration_query) {
								die("insert_account_registration_query failed " . mysqli_error($connection));
							}

							echo "<p class='bg-success'>Account Created.</p>";
						} else {

							//Dupliacte check - NIC
							$query = "SELECT * FROM accounts WHERE nic= '$nic'";
							$check_nic_exists_query = mysqli_query($connection, $query);
							if (mysqli_num_rows($check_nic_exists_query) > 0) {
								echo "<p style='color: red'>NIC already exists</p>";
							} else {

								$query = "INSERT INTO accounts (reg_no,name,mobile, nic, address, email,
						 	secondary_contact, room_id, room_category,advance_payment,monthly_rental,room_entered_date,status, created_by) ";

								$query .= "VALUES('{$reg_no}', '{$name}', '{$mobile}', '{$nic}', '{$address}', '{$email}', '{$secondary_contact}', '{$room_id}', '{$room_category}', '{$advance_payment}', '{$monthly_rental}', '{$room_entered_date}', '{$status}', {$_SESSION['id']}) ";

								$insert_account_registration_query = mysqli_query($connection, $query);

								if (!$insert_account_registration_query) {
									die("insert_account_registration_query failed " . mysqli_error($connection));
								}

								// Successfully Account Created message
								echo "<p class='bg-success' style='text-align:center'>Account Created.</p>";
							}
						}
					}

					?>
				</div>

				<div class="col-md-12">
					<form action="" method="post">

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Reg No.<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<input type="text" name="reg_no" id="reg_no" class="form-control" placeholder="Reg No." autocomplete="off" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Name<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<input type="text" name="name" id="name" class="form-control" placeholder="Name" autocomplete="off" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Mobile<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<input type="number" name="mobile" id="mobile" minlength="9" maxlength="10" class="form-control" placeholder="0772115421" autocomplete="off" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									NIC
								</div>
								<div class="col-md-6">
									<input type="text" name="nic" id="nic" class="form-control" placeholder="NIC">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Address
								</div>
								<div class="col-md-6">
									<textarea id="address" name="address" rows="3" class="form-control" placeholder="Address"></textarea>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Email
								</div>
								<div class="col-md-6">
									<input type="email" name="email" id="email" size="130" class="form-control" placeholder="jhone@gamil.com">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Secondary Contact No.
								</div>
								<div class="col-md-6">
									<input type="number" name="secondary_contact" id="secondary_contact" min="9" max="10" class="form-control" placeholder="0715665636">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Room No.
								</div>
								<div class="col-md-6">
									<select name="room_id" id="room_id" class="form-control">
										<option value="1">1001</option>
										<option value="2">1002</option>
										<option value="3">1003</option>
										<option value="4">1004</option>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Category
								</div>
								<div class="col-md-6">
									<select name="room_category" id="room_category" class="form-control">
										<option value="Single">Single</option>
										<option value="Shared">Shared</option>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Advance Payment
								</div>
								<div class="col-md-6">
									<input type="number" name="advance_payment" id="advance_payment" class="form-control" value="0.00" step="any" placeholder="Advance Payment Amount">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Monthly Rental<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<input type="number" name="monthly_rental" id="monthly_rental" class="form-control" value="0.00" step="any" placeholder="Monthly Rental Amount">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Room Entered Date<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<input type="date" name="room_entered_date" id="room_entered_date" class="form-control pickadate-accessibility rounded-right " placeholder="Select Date" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Status<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<select name="status" id="status" class="form-control" required>
										<option value="active">Active</option>
										<option value="inactive">Inactive</option>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group mt-5">
							<div class="row">
								<div class="col-md-2">
									<button class="btn btn-secondary" onclick="history.back();">Back</button>
								</div>
								<div class="col-md-6 text-right">
									<button type="print" class="btn btn-purple">Print</button>
									<button type="submit" name="submit" class="btn btn-success">Submit</button>
								</div>
							</div>
						</div>
					</form>

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