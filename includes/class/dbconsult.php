<?php

class DbConsult extends DbConn
{


    public function Web($param)
    {
        try {
            $db = new DbConn;
            $tbl = $db->tbl_web;

            $stmt = $db->conn->prepare("SELECT * FROM ".$tbl." WHERE nombre_web = :param or URL = :param or id_usuario = :param");
            $stmt->bindParam(':param', $param);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $err = "";

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        if ($err == '') {

            $success = $result;

        } else {

            $success = $err;

        };

        return $success;

    }


    public function Horario($id)
    {
    	try {
	    	$db = new DbConn;
	        $tbl = $db->tbl_horario;

	        $stmt = $db->conn->prepare("SELECT * FROM ".$tbl." WHERE id_web = :param");
	        $stmt->bindParam(':param', $id);
	        $stmt->execute();

	        $i=0;
            $result['Horario'] = false;

            while ($e = $stmt->fetch(PDO::FETCH_ASSOC)) {
               
                $result['Horario'][$i] = $e;
                $i++;
            }
	        $err = "";

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        if ($err == '') {

            $success = $result;

        } else {

            $success = $err;

        };

        return $success;

    }

    public function Dir($id)
    {
        try {
            $db = new DbConn;
            $tbl = $db->tbl_dir;

            $stmt = $db->conn->prepare("SELECT * FROM ".$tbl." WHERE id_web = :param");
            $stmt->bindParam(':param', $id);
            $stmt->execute();

            $i=0;
            $result['dir'] = false;
            while ($e = $stmt->fetch(PDO::FETCH_ASSOC)) {
               
                $result['dir'][$i] = $e;
                $i++;
            }
            $err = "";

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        if ($err == '') {

            $success = $result;

        } else {

            $success = $err;

        };

        return $success;

    }

    public function Redes($id)
    {
        try {
            $db = new DbConn;
            $tbl = $db->tbl_redes;

            $stmt = $db->conn->prepare("SELECT * FROM ".$tbl." WHERE id_web = :param");
            $stmt->bindParam(':param', $id);
            $stmt->execute();

            $i=0;
            $result['redes'] = false;
            while ($e = $stmt->fetch(PDO::FETCH_ASSOC)) {
               
                $result['redes'][$i] = $e;
                $i++;
            }

            $err = "";


        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        if ($err == '') {

            $success = $result;

        } else {

            $success = $err;

        };

        return $success;

    }

     public function User($param, $consl){

        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("SELECT * FROM ".$tbl_members." WHERE ".$consl." = :param");
            $stmt->bindParam(':param', $param);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        if ($result) {
            
            $res = true;


        }else{

            $res = false;

        }

        return $res;
    }

    public function Tlf($id)
    {
        try {
            $db = new DbConn;
            $tbl = $db->tbl_tlf;

            $stmt = $db->conn->prepare("SELECT * FROM ".$tbl." WHERE id_web = :param");
            $stmt->bindParam(':param', $id);
            $stmt->execute();

            $i=0;
            $result['tlf'] = false;
            while ($e = $stmt->fetch(PDO::FETCH_ASSOC)) {
               
                $result['tlf'][$i] = $e;
                $i++;
            }
            $err = "";

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        if ($err == '') {

            $success = $result;

        } else {

            $success = $err;

        };

        return $success;

    }

}

?>