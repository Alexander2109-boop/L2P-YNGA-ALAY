<?php

class Usuario
{
    public $id;
    public $usuario;
    public $clave;

    // contructor por defecto

    public function __construct()
    {
        $this->id = 0;
        $this->usuario = "";
        $this->clave = "";
    }

    // con parametros

    public function __constructParm($id, $usuario, $clave)
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->clave = $clave;
    }

    // getter y setter
    public function getId()
    {
        return $this->id;

    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    public function getClave()
    {
        return $this->clave;
    }
    public function setClave($clave)
    {
        $this->clave = $clave;
    }

  

}
