<?php
/**
 * Created by PhpStorm.
 * User: jeison
 * Date: 20/08/2018
 * Time: 12:13
 */
namespace App\Controller;
use App\Model\ClassLogin;
use Src\Classes\ClassRender;

class ControllerLogin extends ClassLogin{
    use \Src\Traits\TraitsUrlParser;
    public function __construct()
    {
        if(count($this->parserUrl())==1){
            $render=new ClassRender();
            $render->setTitle("Login");
            $render->setDescription("Faça seu login");
            $render->setKeywords("login, login website, area restrita");
            $render->setDir("Login");
            $render->renderLayout();
        }
    }
    #validar Login do usuario
    public function validarLogin(){
     $validacao=$this->validarUsuario($_POST['usuario'],$_POST['senha']);
     if($validacao==true){
         echo 'logado';
     }else{
         var_dump($validacao);
         echo '<br></br>'.$_POST['usuario'].'<br>';
         echo $_POST['senha'].'<br>';
         echo 'não logou';
     }

    }
}