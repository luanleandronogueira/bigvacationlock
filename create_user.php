<?php
include_once 'providers/classes.php';
include_once 'controllers/header.php';


?>

<div class="container mt-4">
    
        <div class="row">
            <div>
                <h3>Users Area</h3>
                <hr>
            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <h4>New User</h4>
                <br>
                <form action="providers/create_users_be.php" method="post">
                    <label for="user_fname">First Name:</label>
                    <input class="form-control" type="text" name="user_fname" id="user_fname">
                    <br>
                    <label for="user_lname">Last Name:</label>
                    <input class="form-control" type="text" name="user_lname" id="user_lname">
                    <br>
                    <label for="user_email">E-mail:</label>
                    <input class="form-control" type="email" name="user_email" id="user_email">
                    <br>
                    <label for="user_password">Password:</label>
                    <input class="form-control" type="password" name="user_password" id="user_password">
                    <br>
                    <label for="user_confirm_password">Confirm Password:</label>
                    <input class="form-control" type="password" name="user_confirm_password" id="user_confirm_password">
                    <br>
                    <label for="access_module">Access Module:</label>
                    <select class="form-control" name="" id="">
                        <option value="">Admin</option>
                        <option value="">Handyman</option>
                    </select>


                </form>
            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 text-center">
                <label for="date_maitenance"><strong>Date:</strong></label>
                <input class="form-control" type="date" name="date_maitenance" id="date_maitenance">
            </div>

            
        </div>

</div>













<?php include_once 'controllers/footer.php' ?>