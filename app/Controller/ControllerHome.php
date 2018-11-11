<?php
/**
 * Created by PhpStorm.
 * User: jeison
 * Date: 20/08/2018
 * Time: 08:26
 */
namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct()
    {
        $this->setTitle("pagina inicial");
        $this->getDescription("Construcao de Site com MVC");
        $this->setKeywords("Mvc Completo");
        $this->setDir("home/");
        $this->renderLayout();

    }
}