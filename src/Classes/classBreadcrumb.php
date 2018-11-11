<?php
/**
 * Created by PhpStorm.
 * User: jeison
 * Date: 20/08/2018
 * Time: 14:25
 */
namespace Src\Classes;

class classBreadcrumb
{
    use \Src\Traits\TraitsUrlParser;

    #cria os breadcrumbs do site
    public function addBreadcrumb()
    {
        $contador = count($this->parserUrl());
        $arraylink[0]='';
        echo "<a href=".DIRPAGE.">Home > </a>";
        for($i=0;$i<$contador;$i++){
            $arraylink[0]=$this->parserUrl()[$i].'/';
            echo "<a href=".DIRPAGE.$arraylink[0].">".$this->parserUrl()[$i]."</a>";
            if($i < $contador -1){
                echo " > ";
            }
        }
    }
}