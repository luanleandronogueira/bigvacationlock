<?php 
include_once 'classes.php';
$house = new House;

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    if(!empty($_POST)){
        $address_ = ucwords(filter_var($_POST['address'] , FILTER_SANITIZE_FULL_SPECIAL_CHARS)); 
        $house_name = ucwords(filter_var($_POST['house_name'] , FILTER_SANITIZE_FULL_SPECIAL_CHARS)); 
        $door_code = filter_var($_POST['door_code'] , FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
        $gate_code = filter_var($_POST['gate_code'] , FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
        $community_pool = filter_var($_POST['community_pool'] , FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
        $fitness_center = filter_var($_POST['fitness_center'] , FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
        $wifi_network = filter_var($_POST['wifi_network'] , FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
        $wifi_password = filter_var($_POST['wifi_password'] , FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
        $observations = filter_var($_POST['observations'] , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $owner = filter_var($_POST['who_cares'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $house_area = filter_var($_POST['house_area'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id = filter_var($_POST['id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if(!empty($_FILES['photo_house']['name'])){

            //define the way
            $images_folder = 'assets/images/houses/';
            $str = [' ', ',', '/'];
            $extension = explode( '/', $_FILES['photo_house']['type']);
            $new_name = str_replace($str, '-', $address);

            // define new name
            $_FILES['photo_house']['name'] = $new_name . '.' . $extension[1];

            //define path to save
            $path = $images_folder . $_FILES['photo_house']['name'];
            $save_path = '../' . $path;

            try {
                // update a new house
                $house->update_house($address_, $house_name, $door_code, $gate_code, $community_pool, $fitness_center, $wifi_network, $wifi_password, $observations, $path, $owner, $house_area, $id);
                move_uploaded_file($_FILES['photo_house']['tmp_name'], $save_path); // save in the folder
                header("Location: ../edit_house.php?id=" . $id . "&&status=created_house");

            } catch (PDOException $e) {
                throw new Exception('Erro while insert the object: ' . $e->getMessage());
            }

        } else {
            $path = 'assets/images/houses/default_house.jpg';

            try {
                // update a new house
                $house->update_house($address_, $house_name, $door_code, $gate_code, $community_pool, $fitness_center, $wifi_network, $wifi_password, $observations, $path, $owner, $house_area, $id);
                header("Location: ../edit_house.php?id=" . $id . "&&status=created_house");
    
            } catch (PDOException $e) {
                throw new Exception('Erro while insert the object: ' . $e->getMessage());
            } 
        }

    } else {
        header("Location: ../index.php");
        die();
    }
} else {
    header("Location: ../index.php");
    die();
}

