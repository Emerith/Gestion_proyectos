<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 02/10/2018
 * Time: 09:39 PM
 */

namespace AppData\Controller;


class ProximamenteController
{
    private $proximamente;
    public function __construct()
    {
        $this->proximamente= new \AppData\Model\Proximamente();
    }
}