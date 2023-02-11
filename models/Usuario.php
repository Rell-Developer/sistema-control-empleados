<?php

include_once '../databases/conexion.php';


class UsuarioModel{


    private $pdo;


    public function __construct()
    {
        try {
            $this->pdo = Connect::conexBD();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public static function validarLogin($user,$pass){

        try {
            // Peticion con PDO para el login
            $sSQL = Connect::conexBD()->prepare('SELECT * FROM usuarios WHERE usuario = :user AND password = :pass;');
            // Colocamos los parametros enviados por el usuario
            $sSQL->bindParam(":user", $user);
            $sSQL->bindParam(":pass", $pass);
            // Ejecutamos el query
            $sSQL->execute();
            // Retornamos el resultado del query
            return $sSQL->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}