<?php
    require_once("Connection.class.php");
    require_once("Member.class.php");
    
    class MyDatabase {

        public function __construct() {
        }

        public function addMember($member) {
            $connection = Connection::getInstance();
            $query = "INSERT INTO membro(id, nome, email, senha, data_nascimento) VALUES (null, 
                                                                                        '{$member->getName()}',
                                                                                        '{$member->getEmail()}', 
                                                                                        '{$member->getPassword()}', 
                                                                                        '{$member->getBirthDate()}')";
            $sql = $connection->query($query);
        }

        public function updateMemberName($id, $name) {
            $connection = Connection::getInstance();
            $query = "UPDATE membro SET nome='{$name}' WHERE id= $id";
            $sql = $connection->query($query);
        }

        public function getMember($id) {
            $connection = Connection::getInstance();
            $query = "SELECT * FROM membro WHERE id= $id";
            $sql = $connection->query($query);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            
            if(isset($row)) {
                return new Member($row['nome'], $row['senha'], $row['email'], $row['dataNascimento'], $row['id']);
            } else {
                return null;
            }
        }

        public function removeMember($id) {
            $connection = Connection::getInstance();
            $query = "DELETE FROM membro WHERE id= $id";
            $sql = $connection->query($query);
        }
    }


?>