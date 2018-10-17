<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 16/10/2018
 * Time: 07:33 PM
 */

namespace AppData\Controller;


use http\Url;

class FormatoController
{
    private $persona;

    public function __construct()
    {
        $this->persona=new \AppData\Model\Formato();
    }

    public function index()
    {

    }
    public function crear(){
        if(isset($_POST))
        {
            $this->persona->set('nombre',$_POST["nombre"]);
            $this->persona->set('apellido_patern',$_POST["apellido_patern"]);
            $this->persona->set('apellido_matern',$_POST["apellido_matern"]);
            $this->persona->set('email',$_POST["email"]);
            $this->persona->set('pass',$_POST["pass"]);
            $datos=$this->
            print_r($this->persona);
            $this->persona->add();



        }
    }
}?>
<script type="text/javascript">
    window.location.href=<?php echo URL?>
</script>