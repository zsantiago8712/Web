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

        public function __destruct()
        {
            $this->mysqlCon->close();
        }

        public function connect()
        {
            try {
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                $this->mysqlCon = new mysqli($this->host, $this->user, $this->password, $this->db, $this->port);
                $this->mysqlCon->set_charset($this->charset);
            } catch (Exception $e) {
                printf("Error: {}\n", $e->getMessage());
            }
        }


       


        public function prepare($query, $args): array
        {
            try {

                $stmt = $this->mysqlCon->prepare($query);
                $stmt->bind_param('i', $args);
                $stmt->execute();
                $result = $stmt->get_result();
                return $result->fetch_all(MYSQLI_ASSOC);

            }catch (Exception $e) {
                printf("Error: {}\n", $e->getMessage());
                return array();
            }
        }


        

        private function prepareQuery($query): bool|mysqli_stmt
        {
            try {
                return $this->mysqlCon->prepare($query);
            }catch (Exception $e) {
                printf("Error: {}\n", $e->getMessage());
                return false;
            }
        }

        private function bindAndExecuteQuery($query, $args, $reuse): array|bool
        {
            try {
                if (!$reuse) {
                    $stmt = $this->prepareQuery($query);
                }

                $stmt->bind_param($this->formatBindType($args), ...$args);
                $stmt->execute();
                $result = $stmt->get_result();
                return $result->fetch_all(MYSQLI_ASSOC);
            }catch (Exception $e) {
                printf("Error: {}\n", $e->getMessage());
                return false;
            }
        }

        public function query($query, $args = array()): array|bool
        {
            try {
                return $this->bindAndExecuteQuery($query, $args, false);
            }catch (Exception $e) {
                printf("Error: {}\n", $e->getMessage());
                return false;
            }
        }


        public function insert($query, $data): void
        {
            try {
                foreach ($data as $val => $index) {
                    if ($index == 0) {
                        $this->bindAndExecuteQuery($query, $val, false);
                        continue;
                    }
                    $this->bindAndExecuteQuery($query, $val, true);
                }

            }catch (Exception $e) {
                printf("Error: {}\n", $e->getMessage());
            }
        }

        private function formatBindType($args): string
        {
            return str_repeat('s', $args->length);
        }
    }