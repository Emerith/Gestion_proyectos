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

    function conteo_total()
    {
        $sql="SELECT SUM(cuenta) FROM CONTADORES WHERE fecha=curdate()";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }



    function cont_civ()
    {
        $sql="SELECT SUM(cuenta) FROM CONTADORES WHERE id_tipo_contador=230 AND fecha=curdate()";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function cont_dep()
    {
        $sql="SELECT SUM(cuenta) FROM CONTADORES WHERE id_tipo_contador=232 AND fecha=curdate()";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function cont_cult()
    {
        $sql="SELECT SUM(cuenta) FROM CONTADORES WHERE id_tipo_contador=231 AND fecha=curdate()";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function cont_tot_civ()
    {
        $sql="SELECT contadores.cuenta, categoria.descripcion, contadores.fecha FROM contadores, categoria WHERE id_tipo_contador=230 AND categoria.id_categoria=contadores.id_tipo_contador";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function cont_tot_dep()
    {
        $sql="SELECT contadores.cuenta, categoria.descripcion, contadores.fecha FROM contadores, categoria WHERE id_tipo_contador=232 AND categoria.id_categoria=contadores.id_tipo_contador";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function cont_tot_cult()
    {
        $sql="SELECT contadores.cuenta, categoria.descripcion, contadores.fecha FROM contadores, categoria WHERE id_tipo_contador=231 AND categoria.id_categoria=contadores.id_tipo_contador";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
}