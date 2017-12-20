<?php
    require_once("../database/Connection.class.php");
    require_once("../model/Member.class.php");
    
    class MembersController {
        private $connection;
        
        public function __construct() {
            $this->connection = Connection::getInstance();
        }
    
        public function registerNewMember($member) {
            $connection = Connection::getInstance();
            $query = "INSERT INTO membro(id, nome, email, senha, data_nascimento) VALUES (null, 
                                                                                            '{$member->getName()}',
                                                                                            '{$member->getEmail()}', 
                                                                                            '{$member->getPassword()}', 
                                                                                            '{$member->getBirthDate()}')";
            $sql = $connection->query($query);
        }
    }
?>