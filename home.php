<?php
include_once 'providers/classes.php';
include_once 'controllers/header.php';
$house = new House;
$houses = $house->call_one_house($_GET['id']);

// echo '<pre>';
// print_r($houses);
// echo '</pre>';

?>

<section>
    <div class="container mt-4">
        <div class="row">
            <h4><?= $houses['house_name'] ?></h4>
            <hr>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 border-end">
                <div class="p-3">
                    <ul class="nounderline">
                        <h5>Informations</h5>
                        <p id="information">
                            <strong>Address: </strong><?= $houses['address_'] ?></br>
                            <strong>Door Code:</strong> <?= $houses['door_code'] ?></br>
                            <strong>Code Gate:</strong> <?= $houses['gate_code'] ?></br>
                            <strong>Community Pool:</strong> <?= $houses['community_pool'] ?></br>
                            <strong>Fitness Center</strong> <?= $houses['fitness_center'] ?></br>
                            <strong>Wi-Fi Network:</strong> <?= $houses['wifi_network'] ?></br>
                            <strong>Wi-Fi Password:</strong> <?= $houses['wifi_password'] ?></br>
                        </p>
                        <hr>
                        <li><strong>Observations:</strong> <?= $houses['observations'] ?></li>
                    </ul>
                    <input type="hidden">
                    <button onclick="copy_text()" class="btn btn-sm btn-warning ">Copy informations</button>
                    <a href="houses.php" class="btn btn-sm btn-primary ">Back</a>
                </div>

            </div>


            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="p-4">
                    <img class="rounded img-fluid" src="<?= $houses['house_photo'] ?>" alt="House Image">
                </div>

            </div>

        </div>
    </div>
</section>


















<?php include_once 'controllers/footer.php' ?>