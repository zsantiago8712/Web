<?php

    class Db
    {
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
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                $this->mysqlCon = new mysqli($this->host, $this->user, $this->password, $this->db, $this->port);
                $this->mysqlCon->set_charset($this->charset);
                echo "Coneccion exitosa\n";
            } catch (Exception $e) {
                printf("Error: {}\n", $e->getMessage());
            }
        }


        public function query($command): array
        {
            $rows = array();
            try {
                $result =  $this->mysqlCon->query($command);
                var_dump($result->fetch_all(MYSQLI_ASSOC), $rows);
                echo $rows;
                return $rows;
            }catch (Exception $e) {
                printf("Error: {}", $e->getMessage());
                return array();
            }
        }
    }