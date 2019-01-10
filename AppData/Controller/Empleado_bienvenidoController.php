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
        $datos[0]=$this->persona->conteo_total();
        $datos[2]=$this->persona->cont_dep();
        $datos[1]=$this->persona->cont_cult();
        $datos[3]=$this->persona->cont_civ();
        $datos[4]=$this->persona->cont_tot_civ();
        $datos[5]=$this->persona->cont_tot_cult();
        $datos[6]=$this->persona->cont_tot_dep();


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