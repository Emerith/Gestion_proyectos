<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 16/10/2018
 * Time: 07:02 PM
 */

namespace AppData\Model;


class Civicos
{
    private $tabla="prueba";
    private  $id_prueba;
    private  $Nombre;

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

    function add()
    {

        $sql="insert into {$this->tabla} values('0','{$this->Nombre}')";
        $this->conexion->QuerySimple($sql);

    }
    function getAll(){
        $sql="select *from {$this->tabla}";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql = "update {$this->tabla} set Nombre='{$this->Nombre}',Nombre='{$this->Nombre}' where id_prueba='{$this->id_prueba}'";
        $this->conexion->QuerySimple($sql);

    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_prueba='{$id}'";
        $this->conexion->QuerySimple($sql);

    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_prueba='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

}