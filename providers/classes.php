<?php 
date_default_timezone_set('America/Sao_Paulo');
require_once 'connection.php';
require_once 'interfaces.php';

class House implements interface_house{

    private int $id;
    private $conection;
    private $address_;
    private $house_name;
    private $door_code;
    private $gate_code;
    private $community_pool;
    private $fitness_center;
    private $wifi_network;
    private $wifi_password;
    private $observations;
    private $house_photo;
    private $owner;

    public function __construct()
    {
        $this->conection = new Connection;
    }

    public function insert_house($address_, $house_name, $door_code, $gate_code, $community_pool, $fitness_center, $wifi_network, $wifi_password, $observations, $house_photo, $owner) {
        $query = "INSERT INTO tb_houses (address_, house_name, door_code, gate_code, community_pool, fitness_center, wifi_network, wifi_password, observations, house_photo, owner) VALUES (:address_, :house_name, :door_code, :gate_code, :community_pool, :fitness_center, :wifi_network, :wifi_password, :observations, :house_photo, :owner)";

        try {
            $conn = $this->conection->Connect();
            $stmt = $conn->prepare($query);

            $stmt->bindValue(':address_', $address_);
            $stmt->bindValue(':house_name', $house_name);
            $stmt->bindValue(':door_code', $door_code);
            $stmt->bindValue(':address_', $address_);
            $stmt->bindValue(':gate_code', $gate_code);
            $stmt->bindValue(':community_pool', $community_pool);
            $stmt->bindValue(':fitness_center', $fitness_center);
            $stmt->bindValue(':wifi_network', $wifi_network);
            $stmt->bindValue(':wifi_password', $wifi_password);
            $stmt->bindValue(':observations', $observations);
            $stmt->bindValue(':house_photo', $house_photo);
            $stmt->bindValue(':owner', $owner);

            $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception('Erro while insert the object: ' . $e->getMessage());
        }
    }

    public function call_house(){
        $query = "SELECT address_, house_name, id, house_photo FROM tb_houses";

        try {
            $conn = $this->conection->Connect();
            $stmt = $conn->prepare($query);

            $stmt->execute();

            $r = [];
            return $r = $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            throw new Exception('Erro while insert the object: ' . $e->getMessage());
        }
    }

    public function call_all_houses(){
        $query = "SELECT * FROM tb_houses";

        try {
            $conn = $this->conection->Connect();
            $stmt = $conn->prepare($query);
            

            $stmt->execute();

            $r = [];
            return $r = $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            throw new Exception('Erro while insert the object: ' . $e->getMessage());
        }
    }

    public function call_one_house($id){
        $query = "SELECT * FROM tb_houses h JOIN tb_owners ow ON h.owner = ow.id_owner WHERE h.id = :id";

        try {
            $conn = $this->conection->Connect();
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':id', $id);

            $stmt->execute();

            $r = [];
            return $r = $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            throw new Exception('Erro while insert the object: ' . $e->getMessage());
        }
    }

}


class Owners implements interface_owners {
    
    private int $id_owner;
    private $conection;
    private $name_owner;

    public function __construct()
    {
        $this->conection = new Connection;
    }

    public function call_owners(){
        $query = "SELECT * FROM tb_owners";
        try {
            $conn = $this->conection->Connect();
            $stmt = $conn->prepare($query);

            $stmt->execute();

            $r = [];
            return $r = $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            throw new Exception('Erro while insert the object: ' . $e->getMessage());
        }
    }
}

class Handymans implements interface_handymans {

    private int $id_maitenance;
    private $conection;
    private $date_maitenance;
    private $shift_maitenance;
    private $handyman_maitenance;
    private $obs_maitenance;
    private $status_maitenances;

    public function __construct()
    {
        $this->conection = new Connection;
    }
    public function call_handymans(){
        $query = "SELECT * FROM tb_handymans";
        try {
            $conn = $this->conection->Connect();
            $stmt = $conn->prepare($query);

            $stmt->execute();

            $r = [];
            return $r = $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            throw new Exception('Erro while insert the object: ' . $e->getMessage());
        }
    }

}
