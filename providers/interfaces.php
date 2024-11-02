<?php 

include_once 'classes.php';

interface interface_house {

    public function insert_house($address_, $house_name, $door_code, $gate_code, $community_pool, $fitness_center, $wifi_network, $wifi_password, $observations, $house_photo);
}