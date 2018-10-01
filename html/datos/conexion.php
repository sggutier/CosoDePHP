<?php

require_once 'db.php';


class Conexion {
    private static $bd = null;
    private static $pdo ;
    function __construct() {
        try {
            self::conectar();
        } catch (PDOException $e) {
            echo "<H2>Errorerino: La conexión con la base de datos no pudo ser establecida.</H2>" . $e;
        }
    }
    public function conectar() {
        if(self::$pdo == null) {
            self::$pdo = new PDO('mysql:dbname=' . NOMBRE_BD .
                                 ';host=' . HOST . ';',
                                 USUARIO,
                                 PASSWORD,
                                 array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        // Habilitar excepciones
        return self::$pdo;
    }

    public static function getInstancia() {
        if(self::$bd == null) {
            self::$bd = new self();
        }
        return self::$bd;
    }

    function _destructor() {
        self::$pdo = null;
    }
}

?>