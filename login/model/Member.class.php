<?php
    class Member {
        private $id;
        private $name;
        private $password;
        private $email;
        private $birthDate;

        function __construct($email, $password, $id = null, $name = null, $birthDate = null) {
            $this->name = $name;
            $this->password = $password;
            $this->email = $email;
            $this->birthDate = $birthDate;
            $this->id = $id;            
        }    
        
        function auth() {
            $conn = Connection::getInstance();
            $query = "SELECT * FROM membro WHERE email = '{$this->email}' AND senha = '{$this->password}'";
            $sql = $conn->query($query);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            
            if($row) {
                $this->name = $row['nome'];
                $this->id = $row['id'];
                $this->birthDate = $row['data_nascimento'];
                return true;
            } else {
                return false;
            }
        }

        function getId() {
            return $this->id;
        }

        function getEmail() {
            return $this->email;
        }
        
        function getPassword() {
            return $this->password;
        }
        
        function getName() {
            return $this->name;
        }
        
        function getBirthDate() {
            return $this->birthDate;
        }
    }

?>