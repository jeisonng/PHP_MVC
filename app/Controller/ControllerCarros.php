<?php
/**
 * Created by PhpStorm.
 * User: jeison
 * Date: 20/08/2018
 * Time: 09:27
 */
namespace App\Controller;

class ControllerCarros{
    public function carros($tipo,$motor){
       if($tipo == 'veiculos' && $motor='1'){
           $valor='1000,00';
       }elseif($tipo=='veiculos' && $motor=='2'){

               $valor='2000,00';
       }elseif($tipo=='caminhao' && $motor='1'){
           $valor='5000,00';

       }elseif($tipo=='caminhao' && $motor='2'){
           $valor='10000,00';

       }
       echo "O tipo do carro é: {$tipo} com motor {$motor} e o valor é: {$valor}";
    }
}