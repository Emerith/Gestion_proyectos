<?php


namespace AppData\Model;



class CivicosClient
{
    private $tabla = "eventos";
    private $conteo= "contadores";
    private $fecha = "fecha";
    private $id="id_cont_civ";


    function __construct()
    {
        $this->conexion = new conexion();
    }

    public function init()
    {

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
                                date_format(fecha,'%d-%m-%Y')AS fecha, date_format(Fecha_fin,'%d-%m-%Y')AS Fecha_fin,Horario, img
                                FROM eventos
                                WHERE eventos.id_categoria='230'  ORDER BY fecha DESC ";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function contador()
    {
        $fechass=date("Y")."-".date("m")."-".date("d");
//        echo $fechass."<br>";

//        $sql = "SELECT COUNT(id_cont_civ) AS sumita FROM `cont_civ` WHERE fecha='{$fechass}' AND id_tipo_contador=3";
        $sql="SELECT COUNT(cuenta) AS sumita FROM `contadores` WHERE fecha='{$fechass}' AND id_tipo_contador=230";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

    public function insertauno()
    {
//        $sql="INSERT INTO {$this->conteo} VALUES (0,CURDATE(),1)";
        $sql="INSERT INTO {$this->conteo} VALUES (0,1,230,CURDATE())";
        $this->conexion->QuerySimple($sql);
    }

    public function suma()
    {
        $sql="UPDATE {$this->conteo} SET cuenta=cuenta+1 WHERE id_tipo_contador=230";
        $this->conexion->QuerySimple($sql);
    }


}