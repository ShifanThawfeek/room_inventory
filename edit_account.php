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


<?php

if (isset($_GET['id'])) {
	// echo "account id ----" . $_GET['id'];
	$account_id_to_view =  $_GET['id'];

	$query = "SELECT * FROM accounts WHERE id = $account_id_to_view";
	$get_account_by_id = mysqli_query($connection, $query);

	if (!$get_account_by_id) {
		die("get_account_by_id " . mysqli_error($connection));
	}

	while ($row = mysqli_fetch_assoc($get_account_by_id)) {
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
		$outstanding = $row['outstanding'];
		$room_entered_date = $row['room_entered_date'];
		$status = $row['status'];


		// ACCOUNTS ->  Roon No. - should show the room_no table room_no not the id
		$query = "SELECT room_no FROM room_no WHERE $room_id = id";
		$select_room_no_from_room_no_table_query = mysqli_query($connection, $query);

		if (!$select_room_no_from_room_no_table_query) {
			die("select_room_no_from_room_no_table_query failed " . mysqli_error($connection));
		}

		while ($row = mysqli_fetch_assoc($select_room_no_from_room_no_table_query)) {
			$room_no = $row['room_no'];
		}
	}
}

?>

<?php
if (isset($_POST['update'])) {

	$reg_no = $_POST['reg_no'];
	$name = $_POST['name'];
	$nic = $_POST['nic'];
	$address = $_POST['address'];
	$mobile  = $_POST['mobile'];
	$secondary_contact = $_POST['secondary_contact'];
	$email = $_POST['email'];
	$room_no  = $_POST['room_no']; //check convert room_no to room_id 1002
	$room_category = $_POST['room_category'];
	$advance_payment = $_POST['advance_payment'];
	$monthly_rental = $_POST['monthly_rental'];
	$outstanding = $_POST['outstanding'];
	$room_entered_date = $_POST['room_entered_date'];
	$status = $_POST['status'];
	$updated_user_id = $_SESSION['id'];


	//Dupliacte check - reg no.
	$query = "SELECT * FROM accounts WHERE reg_no = '$reg_no' AND id !=  {$_GET['id']}";
	$check_reg_no_exists_query_to_update = mysqli_query($connection, $query);
	if (!$check_reg_no_exists_query_to_update) {
		die("check_reg_no_exists_query_to_update failed " . mysqli_error($connection));
	}
	if (mysqli_num_rows($check_reg_no_exists_query_to_update) > 0) {
		$msg = "$reg_no - Reg_no_duplicates";
		$fail = "Not updated";
		header("Location: http://localhost/room_inventory/edit_account.php?id={$account_id_to_view}&msg={$msg}&fail={$fail}");
		die;
	}

	//Dupliacte check - mobile
	$query = "SELECT * FROM accounts WHERE mobile = '$mobile' AND id !=  {$_GET['id']}";
	$check_mobile_exists_query_to_update = mysqli_query($connection, $query);
	if (mysqli_num_rows($check_mobile_exists_query_to_update) > 0) {
		// echo "<p style='color: red'>Mobile no. already exists</p>";
		$mobileEr = " $mobile - Mobile no. already exists";
		$fail = "Not updated";
		header("Location: http://localhost/room_inventory/edit_account.php?id={$account_id_to_view}&mobileEr={$mobileEr}&fail={$fail}");
		die;
	}

	//Dupliacte check - Email
	$query = "SELECT * FROM accounts WHERE email= '$email' AND id !=  {$_GET['id']}";
	$check_email_exists_query_to_update = mysqli_query($connection, $query);
	if (mysqli_num_rows($check_email_exists_query_to_update) > 0) {
		echo "<p style='color: red'>Email already exists</p>";
	}

	//Dupliacte check - NIC
	if ($nic == '') {
		//insert recored if NIC is NULL, do not duplication chck
		$nic = null;

		$query = "UPDATE accounts SET ";
		$query .= "reg_no = '{$reg_no}', ";
		$query .= "name = '{$name}', ";
		$query .= "nic = '{$nic}', ";
		$query .= "address = '{$address}', ";
		$query .= "mobile = '{$mobile}', ";
		$query .= "secondary_contact = '{$secondary_contact}', ";
		$query .= "email = '{$email}', ";
		$query .= "room_id = '{$room_no}', ";
		$query .= "room_category = '{$room_category}', ";
		$query .= "advance_payment = '{$advance_payment}', ";
		$query .= "monthly_rental = '{$monthly_rental}', ";
		$query .= "outstanding = '{$outstanding}', ";
		$query .= "room_entered_date = '{$room_entered_date}', ";
		$query .= "status = '{$status}', ";
		$query .= "updated_by = '{$updated_user_id}', ";
		$query .= "updated_at = now() ";
		$query .= "WHERE id = {$id} ";

		$update_account_query_allowing_nic_null = mysqli_query($connection, $query);

		if (!$update_account_query) {
			die("update_account_query_allowing_nic_null failed " . mysqli_error($connection));
		}

		echo "<p class='bg-success'>Account Updated.</p>";
	} else {
		//Dupliacte check - NIC
		$query = "SELECT * FROM accounts WHERE nic= '$nic'  AND id !=  {$_GET['id']}";
		$check_nic_exists_query = mysqli_query($connection, $query);
		if (mysqli_num_rows($check_nic_exists_query) > 0) {
			echo "<p style='color: red'>NIC already exists</p>";
		} else {
			$query = "UPDATE accounts SET ";
			$query .= "reg_no = '{$reg_no}', ";
			$query .= "name = '{$name}', ";
			$query .= "nic = '{$nic}', ";
			$query .= "address = '{$address}', ";
			$query .= "mobile = '{$mobile}', ";
			$query .= "secondary_contact = '{$secondary_contact}', ";
			$query .= "email = '{$email}', ";
			$query .= "room_id = '{$room_no}', ";
			$query .= "room_category = '{$room_category}', ";
			$query .= "advance_payment = '{$advance_payment}', ";
			$query .= "monthly_rental = '{$monthly_rental}', ";
			$query .= "outstanding = '{$outstanding}', ";
			$query .= "room_entered_date = '{$room_entered_date}', ";
			$query .= "status = '{$status}', ";
			$query .= "updated_by = '{$updated_user_id}', ";
			$query .= "updated_at = now() ";
			$query .= "WHERE id = {$id} ";

			$update_account_query = mysqli_query($connection, $query);

			if (!$update_account_query) {
				die("update_account_query failed " . mysqli_error($connection));
			}

			$success = "Account Successfully Updated.";
			header("Location: http://localhost/room_inventory/edit_account.php?id=$account_id_to_view&success={$success}");
			//Successfully updated message and should stay on same page

		}
	}
}
?>


<!-- Page content -->
<div class="page-content pt-0">

	<!-- Main sidebar -->
	<?php include "includes/main_sidebar.php"; ?>
	<!-- /main sidebar -->


	<!-- Main content -->
	<div class="content-wrapper">

		<?php
		if (isset($_GET['success'])) {

			echo "<p class='bg-success' style='text-align:center'>{$_GET['success']}</p>";
		}
		?>

		<?php 
		if(isset($_GET['fail'])){
			echo "<p class='bg-danger' style='text-align:center'>{$_GET['fail']}</p>"; 
		}
		?>


		<!-- Content area -->
		<div class="content">

			<!-- Main charts -->
			<div class="">
				<div class="col-md-12">
					<h1>EDIT ACCOUNT</h1><br>
				</div>

				<div class="col-md-12">
					<form action="" method="post">

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Reg No.<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<input type="text" name="reg_no" id="reg_no" class="form-control" placeholder="Reg No." value="<?php echo $reg_no; ?>" required>
								</div>

								<?php
								if (isset($_GET['msg'])) {

									echo "<p style='color: red'>{$_GET['msg']}</p>";
								}
								?>

							</div>
						</div>



						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Name<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<input type="text" name="name" id="name" class="form-control" placeholder="Name" required value="<?php echo $name; ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Mobile No.<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<input type="number" name="mobile" id="mobile" minlength="9" maxlength="10" class="form-control" placeholder="Contact No: 0772115421" value="<?php echo $mobile; ?>">
								</div>
								<?php
								if (isset($_GET['mobileEr'])) {

									echo "<p style='color: red'>{$_GET['mobileEr']}</p>";
								}
								?>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									NIC
								</div>
								<div class="col-md-6">
									<input type="text" name="nic" id="nic" class="form-control" placeholder="NIC" value="<?php echo $nic; ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Address
								</div>
								<div class="col-md-6">
									<textarea id="address" name="address" rows="3" class="form-control" placeholder="Address"><?php echo $address; ?></textarea>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Email
								</div>
								<div class="col-md-6">
									<input type="email" name="email" id="email" size="130" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Secondary Contact No.
								</div>
								<div class="col-md-6">
									<input type="number" name="secondary_contact" id="secondary_contact" class="form-control" min="9" max="10" placeholder="Contact No: 0772115421" value="<?php echo $secondary_contact; ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Room No.
								</div>
								<div class="col-md-6">
									<select name="room_no" id="room_no" class="form-control">
										<option value='1' <?php if ($room_no == '1001') echo 'selected'  ?>>1001</option>
										<option value='2' <?php if ($room_no == '1002') echo 'selected'  ?>>1002</option>
										<option value='3' <?php if ($room_no == '1003') echo 'selected'  ?>>1003</option>
										<option value='4' <?php if ($room_no == '1004') echo 'selected'  ?>>1004</option>
										<option value='5' <?php if ($room_no == '1005') echo 'selected'  ?>>1005</option>
										<option value='6' <?php if ($room_no == '1006') echo 'selected'  ?>>1006</option>
										<option value='7' <?php if ($room_no == '1007') echo 'selected'  ?>>1007</option>
										<option value='8' <?php if ($room_no == '1008') echo 'selected'  ?>>1008</option>
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
										<option value="Single" <?php if ($room_category == 'Single') echo 'selected' ?>>Single</option>
										<option value="Shared" <?php if ($room_category == 'Shared') echo 'selected' ?>>Shared</option>
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
									<input type="number" name="advance_payment" id="advance_payment" class="form-control" placeholder="Advance Payment Amount" step="any" value="<?php echo $advance_payment; ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Monthly Rental<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<input type="number" name="monthly_rental" id="monthly_rental" class="form-control" placeholder="Monthly Rental Amount" step="any" value="<?php echo $monthly_rental; ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Outstanding<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<input type="number" name="outstanding" id="outstanding" class="form-control" placeholder="Outstanding Amount" step="any" value="<?php echo $outstanding; ?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									Room Entered Date<span style="color:#ff0000">*</span>
								</div>
								<div class="col-md-6">
									<input type="date" name="room_entered_date" id="room_entered_date" class="form-control pickadate-accessibility rounded-right " placeholder="Select Date" value="<?php echo $room_entered_date; ?>" required>
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
										<option value='active' <?php if ($status == 'Active') echo 'selected' ?>>Active</option>
										<option value='inactive' <?php if ($status == 'Inactive') echo 'selected' ?>>Inactive</option>
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
									<button type="submit" class="btn btn-info" name="update">Update</button>
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