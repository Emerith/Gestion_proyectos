<?php

namespace AppData\Controller;


class ProximamenteController
{
    private $eventos;

    public function __construct()
    {
        $this->eventos= new \AppData\Model\Proximamente();
    }

    public function index()
    {

    }

}