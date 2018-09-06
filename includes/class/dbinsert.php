<?php

class DbInsert extends DbConn
{
    public function User($usr, $uid, $email, $pw)
    {
        try {

            $db = new DbConn;
            $tbl = $db->tbl_members;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO ".$tbl." (id, username, password, email)
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

   
    public function Web($array){

     try {

            $array = $this->normalizar($array);

            $db = new DbConn;
            $tbl = $db->tbl_web;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO ".$tbl." (nombre_web, id_usuario, URL, tipo_uso, nombre, apellido, apellido2, categoria, logo, color_de_fondo, descripcion, estilo) VALUES (:nombre_web, :id_usuario, :url, :selector ,:nombre, :apellido1, :apellido2, :categoria, :logo, :color_fondo, :descripcion, :estilos)");

            $stmt->bindParam(':nombre_web', $array['nombre_web']);
            $stmt->bindParam(':id_usuario', $array['id_usuario']);
            $stmt->bindParam(':url', $array['URL']);
            $stmt->bindParam(':selector', $array['tipo_uso']);
            $stmt->bindParam(':nombre', $array['nombre']);
            $stmt->bindParam(':apellido1', $array['apellido']);
            $stmt->bindParam(':apellido2', $array['apellido2']);
            $stmt->bindParam(':categoria', $array['categoria']);
            $stmt->bindParam(':logo', $array['logo']);
            $stmt->bindParam(':color_fondo', $array['color_de_fondo']);
            $stmt->bindParam(':descripcion', $array['descripcion']);
            $stmt->bindParam(':estilos', $array['estilo']);
           
            $stmt->execute();

            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        if ($err == '') {

            $success = 'true';

        } else {

            $success = $err;

        };

        return $success;
    }
 
    
    public function Dir($id_web, $dir){

            try{

            $db = new DbConn;
            $tbl = $db->tbl_dir;

            $stmt = $db->conn->prepare('INSERT INTO '.$tbl.' (id_web, direccion) VALUES (:id_web, :dir)');

            $stmt->bindParam(':id_web', $id_web);
            $stmt->bindParam(':dir', $dir);

            $stmt->execute();
                
            $err = '';

            }catch(PDOException $e){

                $err = 'Error: '.$e->getMessage();
            }

            if ($err == '') {

                $success = 'true';

            } else {

                $success = $err;

            };

            return $success;

    }

     public function Tlf($id_web, $tlf){

            try{

            $db = new DbConn;
            $tbl = $db->tbl_tlf;

            $stmt = $db->conn->prepare('INSERT INTO '.$tbl.' (id_web, telefono) VALUES (:id_web, :tlf)');

            $stmt->bindParam(':id_web', $id_web);
            $stmt->bindParam(':tlf', $tlf);

            $stmt->execute();
                
            $err = '';

            }catch(PDOException $e){

                $err = 'Error: '.$e->getMessage();
            }

            if ($err == '') {

                $success = 'true';

            } else {

                $success = $err;

            };

            return $success;
    }

    public function Horario($id_web, $hrio){

            try{

            $db = new DbConn;
            $tbl = $db->tbl_horario;

            $stmt = $db->conn->prepare('INSERT INTO '.$tbl.' (id_web, Horario) VALUES (:id_web, :param)');

            $stmt->bindParam(':id_web', $id_web);
            $stmt->bindParam(':param', $hrio);

            $stmt->execute();
                
            $err = '';

            }catch(PDOException $e){

                $err = 'Error: '.$e->getMessage();
            }

            if ($err == '') {

                $success = 'true';

            } else {

                $success = $err;

            };

            return $success;
    }

    public function Redes($id_web, $red, $tipo){

            try{

            $db = new DbConn;
            $tbl = $db->tbl_redes;

            $stmt = $db->conn->prepare('INSERT INTO '.$tbl.' (id_web, tipo_red, nombre_red) VALUES (:id_web, :param, :param2)');

            $stmt->bindParam(':id_web', $id_web);
            $stmt->bindParam(':param', $tipo);
            $stmt->bindParam(':param2', $red);

            $stmt->execute();
                
            $err = '';

            }catch(PDOException $e){

                $err = 'Error: '.$e->getMessage();
            }

            if ($err == '') {

                $success = 'true';

            } else {

                $success = $err;

            };

            return $success;
    }

    private function normalizar($array){

        $ctrls[0] = 'tipo_uso';
        $ctrls[1] = 'nombre';
        $ctrls[2] = 'apellido';
        $ctrls[3] = 'apellido2';
        $ctrls[4] = 'categoria';
        $ctrls[5] = 'logo';
        $ctrls[6] = 'color_de_fondo';
        $ctrls[7] = 'descripcion';
        $ctrls[8] = 'estilo';
        $ctrls[9] = 'id_usuario';
        $ctrls[10] = 'nombre_web';
        $ctrls[11] = 'URL';
        


        for ($i=0; $i < count($ctrls); $i++) { 

            if (!empty($array[$ctrls[$i]])){

                    $datos[$ctrls[$i]] = $array[$ctrls[$i]];
                    
            }else{

                $datos[$ctrls[$i]] = null;

            }  

        }

        if (isset($datos['logo'])) {

            if ($datos['logo'] != '') {

                $names = json_decode($datos['logo']);
                $datos['logo'] = $datos['nombre_web'].'_'.$names->name;

                rename('uploads/'.$names->tmp_name.$names->name,'imagenes/logos_web/'.$datos['logo']);
            }
        }
        
        return $datos;
    }

    
}


?>