<?php

    class Connection {
        private static $instance;

        private function __construct() {}
       
        public static function getInstance() {
            if(!isset(self::$instance)) {
                try {
                    self::$instance = new PDO("mysql:host=" . "localhost" . ";dbname=" . "ecompjr_db;", "root", "root");
                    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    var_dump($e);
                }
            }
            return self::$instance;
        }
    }