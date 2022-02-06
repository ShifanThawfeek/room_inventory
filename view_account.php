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
	$account_id_to_view =  $_GET['id'];

	$query = "SELECT * FROM accounts WHERE id = $account_id_to_view";
	$get_account_by_id = mysqli_query($connection, $query);

	if(!$get_account_by_id){
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

			if(!$select_room_no_from_room_no_table_query){
				die("select_room_no_from_room_no_table_query failed " . mysqli_error($connection));
			}

			while($row = mysqli_fetch_assoc($select_room_no_from_room_no_table_query)){
				$room_no = $row['room_no'];
			}
	}

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

				</div>

				<div class="col-md-12">

					<div class="form-group">
						<div class="row">
							<div class="col-md-1"> </div>
							<div class="col-md-3">
								Reg No.:
							</div>
							<div class="col-md-6">
								<?php echo "<strong> $reg_no </strong>"; ?>
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
							<?php echo	"<strong> $name </strong>"; ?>
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
								<?php echo "<strong>$mobile</strong>"; ?>
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
							<?php echo "<strong>$nic</strong>" ?>
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
							<?php echo "<strong>$address</strong>" ?>
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
							<?php echo "<strong>$email</strong>" ?>
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
							<?php echo "<strong>$secondary_contact</strong>" ?>
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
							<?php echo 	"<strong>$room_no</strong>"; ?>
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
							<?php echo "<strong>$room_category</strong>" ?>
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
								<?php echo "<strong>$advance_payment</strong>" ?>
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
							<?php echo "<strong>$monthly_rental</strong>" ?>
							</div>
						</div>
					</div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-1"> </div>
                            <div class="col-md-3">
                                Outstanding:
                            </div>
                            <div class="col-md-6">
                                <?php echo "<strong>$outstanding</strong>" ?>
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
							<?php echo "<strong>$room_entered_date</strong>" ?>
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
								
								<?php
								if($status == 'Active'){
								echo "<span class='badge badge-success'>$status</span>";
								}
								else{
									echo "<span class='badge badge-danger'>$status</span>";
								}
								?>

							</div>
						</div>
					</div>

					<div class="form-group mt-5">
						<div class="row">
							<div class="col-md-1"> </div>
							<div class="col-md-3">
                                <button class="btn btn-secondary" onclick="history.back();">Back</button>
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

<?php include "includes/footer.php"; ?>