<?php 

include_once 'classes.php';

interface interface_house {

    public function insert_house($address_, $house_name, $door_code, $gate_code, $community_pool, $fitness_center, $wifi_network, $wifi_password, $observations, $house_photo, $owner, $house_area);
    public function update_house($address_, $house_name, $door_code, $gate_code, $community_pool, $fitness_center, $wifi_network, $wifi_password, $observations, $house_photo, $owner, $house_area, $id);
    public function call_house();
    public function call_all_houses();
    public function call_one_house($id);
    public function call_house_fl_area();
    public function call_house_w_area();
}

interface interface_owners {
    public function call_owners();
}

interface interface_handymans {
    public function call_handymans();
}

interface interface_user {
    public function insert_user($name_user, $nickname_user, $email_user, $password_user, $status_user, $location_user);
}