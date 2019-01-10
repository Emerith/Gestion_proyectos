<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 06/11/2018
 * Time: 10:26 PM
 */

namespace AppData\Model;


class DeportivosClient
{

    private $tabla = "eventos";
    private $conteo= "contadores";
    private $fecha = "fecha";
    private $id="id_cont_dep";


    function __construct()
    {
        $this->conexion = new conexion();
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
        $sql = "select Nombre, descripcion, lugar, 				
                                date_format(fecha,'%d-%m-%Y')As fecha, date_format(Fecha_fin,'%d-%m-%Y') AS Fecha_fin, Horario,img
                                from eventos where id_categoria='232' ORDER BY fecha DESC ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function contador()
    {
        $fechass=date("Y")."-".date("m")."-".date("d");
//        echo $fechass."<br>";

        $sql = "SELECT COUNT(cuenta) AS sumita FROM `contadores` WHERE fecha='{$fechass}' AND id_tipo_contador=232";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

    public function insertauno()
    {
//        $sql="INSERT INTO {$this->conteo} VALUES (0,CURDATE(),1)";
        $sql="INSERT INTO {$this->conteo} VALUES (0,1,232,CURDATE())";
        $this->conexion->QuerySimple($sql);
    }

    public function suma()
    {
        $sql="UPDATE {$this->conteo} SET cuenta=cuenta+1 WHERE id_tipo_contador=232";
        $this->conexion->QuerySimple($sql);
    }
}