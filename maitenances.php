<?php
session_reset();
include_once 'providers/classes.php';
verify_session();
include_once 'controllers/header.php';

$handymans = new Handymans;
$handyman = $handymans->call_handymans();

// echo '<pre>';
//     print_r($handyman);
// echo '</pre>';
?>

<div class="container mt-4">
    <form action="providers/maitenances_be.php" method="post">
        <div class="row">
            <div>
                <h3>Create new Maitenance route</h3>
                <hr>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center">
                <label for="shift_maitenance"><strong>Schedule shift:</strong></label>
                <select class="form-control text-center" required name="shift_maitenance" id="shift_maitenance">
                    <option value="am">Shift AM</option>
                    <option value="pm">Shift PM</option>
                </select>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center">
                <label for="date_maitenance"><strong>Date:</strong></label>
                <input class="form-control text-center" required type="date" name="date_maitenance" id="date_maitenance">
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 text-center">
                <label for="handyman_maitenance"><strong>Handy man:</strong></label>
                <select class="form-control text-center" required name="handyman_maitenance" id="handyman_maitenance">
                    <?php foreach($handyman as $handy){ ?>
                    <option value="<?=$handy['id_handyman'] ?>"><?=$handy['name_handyman']?></option>
                    <?php }?>
                </select>
            </div>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
                <label for="obs_maitenance"><strong>Obs:</strong></label>
                <textarea class="form-control" name="obs_maitenance" id="obs_maitenance"></textarea>
            </div>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-3">
                    <button class="btn btn-success btn-inline" type="submit">Register</button>
            </div>
            
        </div>
    </form>
</div>

















<?php include_once 'controllers/footer.php' ?>