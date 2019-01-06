<?php


namespace AppData\Controller;


class Empleado_bienvenidoController
{
    private $persona;

    public function __construct()
    {
        $this->persona=new \AppData\Model\Empleado_Bienvenido();
    }
    public function index()
    {
        $datos0=$this->persona->cont_civ();
        $datos1=$this->persona->cont_cult();
        $datos2=$this->persona->cont_dep();
        $datos3=$this->persona->conteo_total();

        $datos[0]=$datos0;
        $datos[1]=$datos1;
        $datos[2]=$datos2;
        $datos[3]=$datos3;

        return $datos;
    }
    public function print_pdf()
    {
        $datos=$this->persona->pdf();
        return $datos;
    }


    public function graficar()
    {
        $datos=$this->persona->graficar();
        return $datos;

    }
}