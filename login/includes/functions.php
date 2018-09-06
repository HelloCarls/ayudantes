<?php
//Class Autoloader
spl_autoload_register(function ($className) {

    $className = strtolower($className);
    $path = "includes/{$className}.php";

    if (file_exists($path)) {

        require_once($path);

    } else {

        die("The file {$className}.php could not be found.");

    }
});

function checkAttempts($username)
{

    try {

        $db = new DbConn;
        $conf = new GlobalConf;
        $tbl_attempts = $db->tbl_attempts;
        $ip_address = $conf->ip_address;
        $err = '';

        $sql = "SELECT Attempts as attempts, lastlogin FROM ".$tbl_attempts." WHERE IP = :ip and Username = :username";

        $stmt = $db->conn->prepare($sql);
        $stmt->bindParam(':ip', $ip_address);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

        $oldTime = strtotime($result['lastlogin']);
        $newTime = strtotime($datetimeNow);
        $timeDiff = $newTime - $oldTime;

    } catch (PDOException $e) {

        $err = "Error: " . $e->getMessage();

    }

    //Determines returned value ('true' or error code)
    $resp = ($err == '') ? 'true' : $err;

    return $resp;

};

function mySqlErrors($response)
{
    //Returns custom error messages instead of MySQL errors
    switch (substr($response, 0, 22)) {

        case 'Error: SQLSTATE[23000]':
            echo "El usuario o Email ya existen";
            break;

        default:
            echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>An error occurred... try again</div>";

    }
};

function crear_url($id){
        
        $key = uniqid(rand(), false);
        $db = new DbConn;
        $confi =  new GlobalConf;

        $base_url = $confi->base_url;
        $tbl_members = $db->tbl_members;
        $time = date("Y-m-d H:i:s");
          
        $sql = "UPDATE ".$tbl_members." SET timelast = :time, Keyget = :keyget where id = :uid";
        
        try{

        $stmt = $db->conn->prepare($sql);
        $stmt->bindParam(':uid', $id);
        $stmt->bindParam(':time', $time);
        $stmt->bindParam(':keyget', $key);
        $resul = $stmt->execute();

        }catch(PDOException $e){

             $err = "Error: " . $e->getMessage();
        }

        if ($resul) {
            $key = password_hash($key, PASSWORD_DEFAULT);
            $url = substr($base_url . $_SERVER['PHP_SELF'], 0, -strlen(basename($_SERVER['PHP_SELF']))) . "password_reset.php?id=".$id."&key=" . $key;
        }else{
            $url = false;
        }
        

        return $url;
}