<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 09/01/2019
 * Time: 10:02 AM
 */

namespace AppData\Model;


class Contadores
{
    public function __construct()
    {
        $this->conexion=new conexion();
    }
    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function getAll()
    {
        $sql="SELECT * FROM contadores";
        $datos=$this->conexion->QueryResultado($sql);

        return $datos;
    }
}