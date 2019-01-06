<?php


namespace AppData\Model;


class Empleado_Bienvenido
{

    function __construct()
    {
        $this->conexion=new conexion();
    }
    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }
    public function get($atributo)
    {
        return $this->$atributo;
    }

    function graficar()
    {
        $sql="SELECT categoria.descripcion,
              COUNT(categoria.descripcion) 
              FROM eventos,categoria where eventos.id_categoria=categoria.id_categoria 
              GROUP BY categoria.descripcion";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }

    function pdf()
    {
        $sql="SELECT eventos.id_evento,eventos.Nombre,eventos.lugar,date_format(eventos.fecha,'%d-%m-%Y')AS fecha,date_format(eventos.Fecha_fin,'%d-%m-%Y')as Fecha_fin,eventos.Horario,categoria.descripcion 
              FROM eventos,categoria
              where eventos.id_categoria = categoria.id_categoria
              ORDER BY categoria.id_categoria";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }

    function cont_civ()
    {
        $sql="SELECT cuenta FROM cont_civ";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }

    function cont_dep()
    {
        $sql="SELECT cuenta FROM cont_dep";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }

    function cont_cult()
    {
        $sql="SELECT cuenta FROM cont_cult";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }

    function conteo_total()
    {
        $sql="SELECT SUM(cont_dep.cuenta+cont_cult.cuenta+cont_civ.cuenta) AS sumatot FROM cont_dep, cont_cult, cont_civ";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

}