<?php 
class NewUserForm extends DbConn
{
    public function createUser($usr, $uid, $email, $pw)
    {
        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO ".$tbl_members." (id, username, password, email)
            VALUES (:id, :username, :password, :email)");
            $stmt->bindParam(':id', $uid);
            $stmt->bindParam(':username', $usr);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $pw);
            $stmt->execute();

            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }
        //Determines returned value ('true' or error code)
        if ($err == '') {

            $success = 'true';

        } else {

            $success = $err;

        };

        return $success;
    }

    public function cambiarPass($mypassword, $uid){
        
        $key = 0;

        try {
            $db = new DbConn;
            $tbl_members = $db->tbl_members;
 
            $sql = "UPDATE ".$tbl_members." SET password = :pass, Keyget = :key where id = :uid";

            $stmt = $db->conn->prepare($sql);
            $stmt->bindParam(':pass', $mypassword);
            $stmt->bindParam(':key', $key);
            $stmt->bindParam(':uid', $uid);
            $resul = $stmt->execute();

        } catch (PDOException $e) {
            $err = "Error: " . $e->getMessage();
        }

        return $resul;
    }
}
