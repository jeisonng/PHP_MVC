<?php

namespace Src\Classes;

use Src\Traits\TraitsUrlParser;

class ClassRoutes{
    use TraitsUrlParser;
    private $Rota;

    #Metodo para retorno da rota
    public function getRota(){
        $Url=$this->parserUrl();
        $I=$Url[0];

        $this->Rota=array(

            ""=>"ControllerHome",
            "home"=>"ControllerHome",
            "sitemap"=>"ControllerSitemap",
            "carros"=>"ControllerCarros",
            "contato"=>"ControllerContato",
            "cadastro"=>"ControllerCadastro",
            "login"=>"ControllerLogin",

        );
        if(array_key_exists($I,$this->Rota)){
            if(file_exists(DIRREQ."app/controller/{$this->Rota[$I]}.php")){
                return $this->Rota[$I];
            }else{
                return "ControllerHome";
            }
        }else{
            return "Controller404";
        }
    }
}