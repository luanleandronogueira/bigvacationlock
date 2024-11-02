<?php
include_once 'controllers/header.php';

?>
<script>
        // Verifique se a página foi recarregada (atualizada)
        if (performance.navigation.type === 1) {
            // Redirecione para a URL desejada
            window.location.href = 'create_house.php';
        }
</script>
<section>
    <div class="container mt-2">
        <form action="providers/create_house_be.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="mt-3">
                    <a href="houses.php" class="btn btn-success float-end">See All Houses</a>
                </div>
                <div class="mt-3 text-center">
                    <h3>Insert a new house</h3>
                </div>

                <?php if (isset($_GET['status']) and $_GET['status'] === 'created_house') { ?>
                <div class="p-3 bg-success bg-opacity-10 border border-success border-start-0 border-end-0 text-center">
                    You've create a new House!
                </div>
                <?php } ?>

                <hr>

                <div class="col-xxl-8 col-xl-8 col-lg-8 col-sm-12 col-md-12">
                    <label for="address">Address:</label>
                    <input class="form-control" required type="text" name="address" id="address">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="house_name"> <strong>House Name:</strong></label>
                    <input class="form-control" required type="text" name="house_name" id="house_name">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="door_code">Door Code:</label>
                    <input class="form-control" required type="text" name="door_code" id="">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="gate_code">Gate Code:</label>
                    <input class="form-control" required type="text" name="gate_code" id="gate_code">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="community_pool">Community Pool:</label>
                    <input class="form-control" type="text" name="community_pool" id="community_pool">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="fitness_center">Fitness Center:</label>
                    <input class="form-control" type="text" name="fitness_center" id="fitness_center">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="wifi_network">Wi-Fi Network:</label>
                    <input class="form-control" type="text" name="wifi_network" id="wifi_network">
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-12 col-md-12">
                    <label for="wifi_password">Wi-Fi Password:</label>
                    <input class="form-control" type="text" name="wifi_password" id="wifi_password">
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-md-12">
                    <label for="observations">Observations:</label>
                    <textarea class="form-control" rows="8" name="observations" id="observations"></textarea>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-md-12 mt-2">
                    <label for="photo_house">House Photo:</label>
                    <input class="form-control" type="file" name="photo_house" id="photo_house">
                </div>

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-md-12 mt-4">
                    <a href="" class="btn btn-warning">Back</a>
                    <button class="btn btn-primary" type="submit">Create new</button>
                </div>
        </form>
    </div>

</section>













<?php include_once 'controllers/footer.php' ?>