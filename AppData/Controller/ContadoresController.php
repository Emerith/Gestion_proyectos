<?php
/**
 * Created by PhpStorm.
 * User: Luis Hernandez
 * Date: 09/01/2019
 * Time: 10:02 AM
 */

namespace AppData\Controller;


class ContadoresController
{
    private $contadores;

    public function __construct()
    {
        $this->contadores= new \AppData\Model\Contadores();
    }

    public function index()
    {
        $dato=$this->contadores->getAll();
        $datos[0]=$dato;

        return $datos;
//        print_r($datos);
    }

}