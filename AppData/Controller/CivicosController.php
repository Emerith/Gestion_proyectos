<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 16/10/2018
 * Time: 07:03 PM
 */

namespace AppData\Controller;


class CivicosController
{
    private $prueba;
    public function __construct()
    {

        $this->prueba=new \AppData\Model\Civicos();

    }

    public function index()
    {

        $datos1=$this->prueba->getAll();
        $datos[0]=$datos1;

        return $datos;
    }
    public function crear()
    {
        if($_POST)
        {
            $this->prueba->set('Nombre',$_POST["Nombre"]);
            $this->prueba->add();
            $datos1=$this->prueba->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }
    public function eliminar($id)
    {
        $this->prueba->delete($id[0]);
        $datos1=$this->prueba->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->prueba->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->prueba->set("id_prueba",$id[0]);
            $this->prueba->set('Nombre',$_POST["Nombre"]);
            $this->prueba->update();
            $datos1=$this->prueba->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }


}