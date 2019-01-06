<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/11/2018
 * Time: 11:00 PM
 */

namespace AppData\Controller;


class CivicosClientController
{

    private $eventos;

    public function __construct()
    {
        $this->eventos= new \AppData\Model\CivicosClient();
    }

    public function index()
    {
        $row=mysqli_fetch_array($dato=$this->eventos->contador());
//        print_r($row['sumita']);
//        echo "<br>";

        if ($row['sumita']<1){
            $this->eventos->insertauno();
//            echo "entraste al if";
        }
        else{
            $this->eventos->suma();
//            echo "entraste al else";
        }
        $datos1=$this->eventos->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

}