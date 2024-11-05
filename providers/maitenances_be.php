<?php 
include_once 'classes.php';

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    if(!empty($_POST)){

        echo '<pre>';
            print_r($_POST);
        echo '</pre>';


    } else {


    }

} else {



}