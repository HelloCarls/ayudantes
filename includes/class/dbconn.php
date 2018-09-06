<?php

    class DbConn
    {
        public $conn;
        public function __construct()
        {   
            $base_url = dirname(__FILE__);
            $signin_url = substr($base_url, 0, -(9 + strlen(basename($base_url))));

            require ($signin_url.'login/dbconf.php');
            $this->host = $host; // Host name
            $this->username = $username; // Mysql username
            $this->password = $password; // Mysql password
            $this->db_name = $db_name; // Database name
            $this->tbl_prefix = $tbl_prefix; // Prefix for all database tables
            $this->tbl_members = $tbl_members;
            $this->tbl_attempts = $tbl_attempts;
            $this->tbl_web = $tbl_web;
            $this->tbl_URL = $tbl_URL;
            $this->tbl_dir = $tbl_dir;
            $this->tbl_horario = $tbl_horario;
            $this->tbl_redes = $tbl_redes;
            $this->tbl_servicios = $tbl_servicios;
            $this->tbl_tlf = $tbl_tlf;


            

            try {
    			// Connect to server and select database.
    			$this->conn = new PDO('mysql:host=' . $host . ';dbname=' . $db_name . ';charset=utf8', $username, $password);
    			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		} catch (\Exception $e) {
    			die('Database connection error');
    		}
        }
    }

?>