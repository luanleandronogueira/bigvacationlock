<?php 

include_once 'classes.php';

interface interface_house {

    public function insert_house($address_, $house_name, $door_code, $gate_code, $community_pool, $fitness_center, $wifi_network, $wifi_password, $observations, $house_photo, $onwer);
    public function call_house();
    public function call_all_houses();
    public function call_one_house($id);
}

interface interface_owners {
    public function call_owners();
}

interface interface_handymans {
    public function call_handymans();
}