<?php include "includes/login_header.php"; ?>
<?php include "includes/db.php"; ?>
<?php session_start(); ?>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM sys_user WHERE username = '{$username}' ";
    $login_query = mysqli_query($connection, $query);

    if (!$login_query) {
        die("login_query failed " . mysqli_error($connection));
    } else {
        while ($row = mysqli_fetch_assoc($login_query)) {
            $log_user_id = $row['id'];
            $log_name = $row['name'];
            $log_username = $row['username'];
            $log_email = $row['email'];
            $log_password = $row['password'];
        }

        if ($username == $log_username && $password == $log_password) {
            $_SESSION['id'] = $log_user_id;
            $_SESSION['name'] = $log_name;
            $_SESSION['username'] = $log_username;
            $_SESSION['email'] = $log_email;
            $_SESSION['password'] = $log_password;

            header("Location: http://localhost/room_inventory/account.php");
        } else {
            header("Location: http://localhost/room_inventory/login.php");
        }
    }
}

?>
<!-- Page content -->
<div class="page-content" style="padding-top: 100px; 
    background-image: url('./global_assets/images/backgrounds/user_bg2.jpg'); 
    background-repeat: no-repeat;
    background-size:cover;">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login form -->
                <div class="login-form">
                    <div class="card mb-0">
                        <div class="card-body">

                            <div class="text-center mb-3">

                                <img src="./global_assets/images/room_inventory_longLogo.png" alt="" style="width: 75%">

                                <h5 class="mb-0 mt-3">Login to your account</h5>
                                <span class="d-block text-muted">Enter your credentials below</span>
                            </div>

                            <form method="POST" action="">

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input id="username" class="block mt-1 w-full form-control" type="text" name="username" placeholder="username" :value="old('email')" required autofocus />
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input id="password" class="block mt-1 w-full form-control" type="password" name="password" placeholder="password" required autocomplete="current-password" />
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>

                                <!-- <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <input type="checkbox" id="remember_me" name="remember" />
                                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                                        </label>
                                    </div> -->

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" name="login">Sign in</button>
                                </div>

                            </form>
                            <!-- /login form -->

                        </div>
                    </div>
                </div>

            </div>
            <!-- /content area -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>

</html>