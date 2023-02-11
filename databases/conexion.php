
<?php
class Connect{

    public static function conexBD(){
        try {
            $conexPDO= new PDO('mysql:host=localhost;dbname=db-electiva-area-1','root','');
            $conexPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexPDO;
        } catch(PDOException $error) {
            echo "Error de conexion a la base de datos";
            exit;
        }
    }
}

// echo Conex::conexBD();
