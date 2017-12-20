<?php
    class Member {
        private $id;
        private $name;
        private $password;
        private $email;
        private $birthDate;

        function __construct($name, $password, $email, $birthDate, $id = null) {
            $this->name = $name;
            $this->password = $password;
            $this->email = $email;
            $this->birthDate = $birthDate;
            $this->id = $id;            
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