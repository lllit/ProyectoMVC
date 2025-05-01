<?php
class BaseDatos
{
    const servidor = "localhost";
    const usuarioBd = "root";
    const contraseña = "";
    const nombreBd = "proyectosmvc";
    
    public static function Conectar()
    {
        try {
            $conexion = new PDO(
                "mysql:host=" . self::servidor . ";dbname=" . self::nombreBd . ";charset=utf8",
                self::usuarioBd,
                self::contraseña
            );
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexion;
        } catch (PDOException $e) {
            return "Fallo: " . $e->getMessage();
        }
    }
}