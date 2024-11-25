<?php
include_once 'providers/classes.php';
include_once 'controllers/header.php';
$house = new House;
$houses = $house->call_one_house($_GET['id']);
$owners = new Owners;
$owner = $owners->call_owners();

// echo '<pre>';
// print_r($houses);
// echo '</pre>';

?>
<script>
    // Verifique se a página foi recarregada (atualizada)
    if (performance.navigation.type === 1) {
        // Redirecione para a URL desejada
        window.location.href = 'edit_house.php?id=<?=$_GET['id'] ?>';
    }
</script>
<section>
    <div class="container mt-2">
        <form action="providers/edit_house_be.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="mt-3">
                    <a href="houses.php" class="btn btn-success float-end">See All Houses</a>
                </div>
                <div class="mt-3 text-center">
                    <h3>Update informations</h3>
                </div>

                <?php if (isset($_GET['status']) and $_GET['status'] === 'created_house') { ?>
                    <div class="p-3 bg-success bg-opacity-10 border border-success border-start-0 border-end-0 text-center">
                        You've updated the informations!
                    </div>
                <?php } ?>

                <hr>

                <div class="col-xxl-8 col-xl-8 col-lg-8 col-sm-12 col-md-12">
                    <label for="address">Address:</label>
                    <input class="form-control" required value="<?=$houses['address_'] ?>" type="text" name="address" id="address">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="house_name"> <strong>House Name:</strong></label>
                    <input class="form-control" required value="<?=$houses['house_name'] ?>" type="text" name="house_name" id="house_name">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="door_code">Door Code:</label>
                    <input class="form-control" required value="<?=$houses['door_code'] ?>" type="text" name="door_code" id="">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="gate_code">Gate Code:</label>
                    <input class="form-control" required value="<?=$houses['gate_code'] ?>" type="text" name="gate_code" id="gate_code">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="community_pool">Community Pool:</label>
                    <input class="form-control" type="text" value="<?=$houses['community_pool'] ?>" name="community_pool" id="community_pool">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="fitness_center">Fitness Center:</label>
                    <input class="form-control" type="text" value="<?=$houses['fitness_center'] ?>" name="fitness_center" id="fitness_center">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="wifi_network">Wi-Fi Network:</label>
                    <input class="form-control" type="text" value="<?=$houses['wifi_network'] ?>" name="wifi_network" id="wifi_network">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="wifi_password">Wi-Fi Password:</label>
                    <input class="form-control" type="text" value="<?=$houses['wifi_password'] ?>" name="wifi_password" id="wifi_password">
                </div>

                <!-- ----------------------------------------- -->

                <hr class="mt-3">
                <h6>Who takes care of this house?</h6>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-md-12">
                    <label for="who_cares">Select one:</label>
                    <select class="form-control" name="who_cares" id="who_cares">

                        <?php foreach($owner as $o) {?>
                        <option value="<?=$o['id_owner'] ?>"><?=$o['name_owner'] ?></option>
                        <?php }?>

                    </select>
                </div>
                <hr class="mt-3">

                <!-- ----------------------------------------- -->

                <hr class="mt-3">
                <h6>Region</h6>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-md-12">
                    <label for="house_area">Choose Area:</label>
                    <select class="form-control" name="house_area" id="house_area">
                        <option value="fl_area">Florida Area</option>
                        <option value="w_area">West Area</option>
                    </select>
                </div>
                <hr class="mt-3">

                <!-- ----------------------------------------- -->

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-md-12">
                    <label for="observations">Observations:</label>
                    <textarea class="form-control" value="<?=$houses['observations'] ?>" rows="8" name="observations" id="observations"></textarea>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-md-12 mt-2">
                    <label for="photo_house">House Photo:</label>
                    <input class="form-control" type="file" name="photo_house" id="photo_house">
                </div>

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-md-12 mt-4">
                    <a href="houses.php" class="btn btn-warning">Back</a>
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>

                <input type="hidden" name="id" value="<?=$_GET['id']?>">

        </form>
    </div>

</section>

<?php include_once 'controllers/footer.php' ?>