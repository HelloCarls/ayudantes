<?php
class SelectEmail extends DbConn
{
    public function emailPull($id)
    {
        try {
            $db = new DbConn;
            $tbl_members = $db->tbl_members;

            $stmt = $db->conn->prepare("SELECT email, username FROM ".$tbl_members." WHERE id = :myid");
            $stmt->bindParam(':myid', $id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            $result = "Error: " . $e->getMessage();

        }

        //Queries database with prepared statement
        return $result;

    }

    public function verify($email)
    {
        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("SELECT id, username FROM ".$tbl_members." WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();
            
        }
        
        if (!isset($result['id'])) {
            $resp = false;
        }else{
            $resp = $result;
        }

        return $resp;

    }
}
