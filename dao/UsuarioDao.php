<?php

require_once __DIR__ . '/../modelo/Usuario.php';
require_once __DIR__ . '/../Bd/conexion.php';

class UsuarioDao
{

    public function autenticar($usuario, $clave): ?Usuario
    {
        $conexion = new conexion();
        $pdo = $conexion->conectar();
        try {
            // consultas sql
            $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND clave = :clave";
            $stmt = $pdo->prepare($sql);
            $stmt-> execute([':usuario' => $usuario, ':clave' => $clave]);
            $fila = $stmt->fetch(PDO::FETCH_OBJ);
            if ($fila) {
                $usuario = new Usuario();
                $usuario->setId($fila->id);
                $usuario->setUsuario($fila->usuario);
                $usuario->setClave($fila->clave);
                return $usuario;
            }
            return null;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }
}
