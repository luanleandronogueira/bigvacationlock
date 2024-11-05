<?php
include_once 'providers/classes.php';
include_once 'controllers/header.php';
$house = new House;
$houses = $house->call_house();

// echo '<pre>';
//     print_r($houses);
// echo '</pre>';

?>
<script>
    // Verifique se a página foi recarregada (atualizada)
    if (performance.navigation.type === 1) {
        // Redirecione para a URL desejada
        window.location.href = 'houses.php';
    }
</script>

<section>
    <div class="container">
        <div class="row">
            <div class="mt-4">
                <div class="p-3 bg-secondary bg-opacity-10 border border-secondary border-start-0 border-end-0 text-center">
                    All Houses
                </div>
                <div class="text-end mt-3">
                   <a href="create_house.php" class="btn btn-success">+ Insert New House</a>
                </div>
            </div>
            <div class="mt-5">
                <div class="card">
                    <div class="card-header">
                        <em>Houses</em>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped sua-tabela" id="myTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address </th>
                                    <th></th>
                                    <th>See Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($houses as $home) {?>

                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="<?=$home['house_photo']?>" width="60px" height="60px" alt="house Image">
                                        </td>
                                        <td><strong><?=$home['house_name'] ?></strong></td>
                                        <td><?=$home['address_'] ?></td>
                                        <td></td>
                                        <td><a href="home.php?id=<?=$home['id']?>" class="btn btn-sm btn-info">Details</a></td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
</section>




<?php include_once 'controllers/footer.php' ?>