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
    private $house_area;

    public function __construct()
    {
        $this->conection = new Connection;
    }

    public function insert_house($address_, $house_name, $door_code, $gate_code, $community_pool, $fitness_center, $wifi_network, $wifi_password, $observations, $house_photo, $owner, $house_area) {
        $query = "INSERT INTO tb_houses (address_, house_name, door_code, gate_code, community_pool, fitness_center, wifi_network, wifi_password, observations, house_photo, owner, house_area) VALUES (:address_, :house_name, :door_code, :gate_code, :community_pool, :fitness_center, :wifi_network, :wifi_password, :observations, :house_photo, :owner, :house_area)";

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
            $stmt->bindValue(':house_area', $house_area);

            $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception('Erro while insert the object: ' . $e->getMessage());
        }
    }

    public function update_house($address_, $house_name, $door_code, $gate_code, $community_pool, $fitness_center, $wifi_network, $wifi_password, $observations, $house_photo, $owner, $house_area, $id){
        $query = "UPDATE tb_houses SET address_ = :address_, house_name = :house_name, door_code = :door_code, gate_code = :gate_code, community_pool = :community_pool, fitness_center = :fitness_center, wifi_network = :wifi_network, wifi_password = :wifi_password, observations = :observations, house_photo = :house_photo, owner = :owner, house_area = :house_area WHERE id = :id";

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
            $stmt->bindValue(':house_area', $house_area);
            $stmt->bindValue(':id', $id);

            $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception('Erro while insert the object: ' . $e->getMessage());
        }

    }

    public function call_house(){
        $query = "SELECT address_, house_name, id, house_photo, house_area FROM tb_houses";

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

    public function call_house_w_area(){
        $query = "SELECT address_, house_name, id, house_photo, house_area FROM tb_houses WHERE house_area = 'w_area'";

        try {
            $conn = $this->conection->Connect();
            $stmt = $conn->prepare($query);

            $stmt->execute();

            $r = [];
            return $r = $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            throw new Exception('Erro while getting the object: ' . $e->getMessage());
        }
    }

    public function call_house_fl_area(){
        $query = "SELECT address_, house_name, id, house_photo, house_area FROM tb_houses WHERE house_area = 'fl_area'";

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

class User implements interface_user {
    private int $id_user;
    private $conection;
    private $name_user;
    private $nickname_user;
    private $email_user;
    private $password_user;
    private $status_user;
    private $location_user;

    public function __construct()
    {
        $this->conection = new Connection;
    }

    public function call_user(){
        $query = "SELECT * FROM tb_users";
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

    public function authentic_user($email_user){
        $query = "SELECT * FROM tb_users WHERE status_user != 'I' AND nickname_user = :email_user LIMIT 1";

        try {
            $conn = $this->conection->Connect();
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':email_user', $email_user);

            $stmt->execute();

            $r = [];
            return $r = $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            throw new Exception('Erro while insert the object: ' . $e->getMessage());
        }
    }

    public function consult_user($email_user){
        $query = "SELECT * FROM tb_users WHERE email_user = :email_user";

        try {
            $conn = $this->conection->Connect();
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':email_user', $email_user);

            $stmt->execute();

            $r = [];
            return $r = $stmt->rowCount();

        } catch (PDOException $e) {
            throw new Exception('Erro while insert the object: ' . $e->getMessage());
        }
    }

    public function insert_user($name_user, $nickname_user, $email_user, $password_user, $status_user, $location_user) {
        $query = "INSERT INTO tb_users (name_user, nickname_user, email_user, password_user, status_user, location_user) VALUES (:name_user, :nickname_user, :email_user, :password_user, :status_user, :location_user)";

        try {
            $conn = $this->conection->Connect();
            $stmt = $conn->prepare($query);

            $stmt->bindValue(':name_user', $name_user);
            $stmt->bindValue(':nickname_user', $nickname_user);
            $stmt->bindValue(':email_user', $email_user);
            $stmt->bindValue(':password_user', $password_user);
            $stmt->bindValue(':status_user', $status_user);
            $stmt->bindValue(':location_user', $location_user);

            $stmt->execute();
        } catch (PDOException $e) {
            throw new Exception('Erro while insert the object: ' . $e->getMessage());
        }
    }



}

function verify_session() {
    // Inicia a sessão se ainda não estiver iniciada
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Verifica se a sessão é válida e se o usuário está ativo
    if (!isset($_SESSION) || $_SESSION['status_user'] != 'A') {
        session_destroy();
        header("Location: login.php?error=1&session_invalid");
        exit;
    }
}
