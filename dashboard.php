<?php
session_start();
include_once 'providers/classes.php';
verify_session();
include_once 'controllers/header.php';

?>

<div class="container mt-3">
    <div class="row">

        <div>
            <h4> <strong>Welcome,</strong> <?=$_SESSION['nickname_user'] ?></h4>
            <hr>
        </div>

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-md-12 mt-1">
            <div class="card" >
                <h5 class="card-header">Houses</h5>
                <!-- <img src="assets/images/houses/default_house.jpg" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">See all properties</h5>
                    <p class="card-text">Here you can view all available properties</p>
                    <a href="houses.php" class="btn btn-primary">See</a>
                </div>
            </div>
        </div>


        <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-12 col-md-12 mt-1">
            <div class="card" >
                <h5 class="card-header">Maitenance</h5>
                <img src="assets/images/houses/default_house.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Create new maitenance route</h5>
                    <p class="card-text">It's available to build and share a maitenance route</p>
                    <a href="maitenances.php" class="btn btn-primary">Create</a>
                </div>
            </div>
        </div> -->

    </div>
</div>


<?php include_once 'controllers/footer.php' ?>