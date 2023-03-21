<?php

    class Db {
        private $host;
        private $db;
        private $user;
        private $port;
        private $password;
        private  $charset = 'utf8mb4';
        private $mysqlCon;


        public function __construct($host, $db, $user, $password, $port)
        {
            $this->host = $host;
            $this->db = $db;
            $this->user = $user;
            $this->password = $password;
            $this->port = $port;
        }

        public function connect()
        {
            try {
                $this->mysqlCon = new mysqli($this->host, $this->user, $this->password, $this->db, $this->port);
                $this->mysqlCon->set_charset($this->charset);
                echo "Coneccion exitosa";
            } catch (Exception $e) {
                printf("Error: {}", $e->getMessage());
            }
        }
    }


    $db = new Db("localhost", 'dzamora', 'dzamora', '217924', '3306');
    $db->connect();