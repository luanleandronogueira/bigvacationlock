<?php
session_reset();
include_once 'providers/classes.php';
verify_session();
include_once 'controllers/header.php';


?>

<div class="container mt-4">

    <div class="row">
        <div>
            <h3>Users Area</h3>
            <hr>
        </div>
        <?php if (isset($_GET['status2']) and $_GET['status2'] === 'success') { ?>

            <div class="alert alert-success text-center alert-dismissible fade show mt-4" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Successfully created
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php } ?>

        <?php if (isset($_GET['status']) and $_GET['status'] === 'password_not_equal') { ?>

            <div class="alert alert-danger text-center alert-dismissible fade show mt-4" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Passwords are not the same
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php } ?>

        <?php if (isset($_GET['status1']) and $_GET['status1'] === 'user_exists') { ?>

            <div class="alert alert-warning text-center alert-dismissible fade show mt-4" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <strong>Previously registered user</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php } ?>

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <h4>New User</h4>
            <br>
            <form action="providers/create_users_be.php" method="post">
                <label for="name_user">Full Name:</label>
                <input class="form-control" type="text" name="name_user" id="name_user">
                <br>
                <label for="nickname_user">Nickname:</label>
                <input class="form-control" type="text" name="nickname_user" id="nickname_user">
                <br>
                <label for="email_user">E-mail:</label>
                <input class="form-control" type="email" name="email_user" id="email_user">
                <br>
                <label for="password_user">Password:</label>
                <input class="form-control" type="password" name="password_user" id="password_user">
                <br>
                <label for="user_confirm_password">Confirm Password:</label>
                <input class="form-control" type="password" name="user_confirm_password" id="user_confirm_password">
                <br>
                <label for="location_user">Access Module:</label>
                    <select class="form-control" name="location_user" id="location_user">
                        <option value="all">All Areas</option>
                        <option value="fl_area">Florida Area</option>
                        <option value="w_area">West Area</option>
                    </select>
                </br>
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>

        <!-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                <label for="date_maitenance"><strong>Date:</strong></label>
                <input class="form-control" type="date" name="date_maitenance" id="date_maitenance">
            </div> -->


    </div>

</div>


<?php include_once 'controllers/footer.php' ?>