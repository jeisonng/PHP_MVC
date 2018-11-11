<?php
/**
 * Created by PhpStorm.
 * User: jeison
 * Date: 20/08/2018
 * Time: 12:13
 */
namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
class ControllerContato extends ClassRender implements InterfaceView{
    public function __construct()
    {
        $this->setTitle("Contato");
        $this->setDescription("Faça contato conosco");
        $this->setKeywords("Contato, Telefone, Email");
        $this->setDir("contato");
        $this->renderLayout();

    }
}