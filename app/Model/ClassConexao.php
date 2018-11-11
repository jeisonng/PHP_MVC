<?php
/**
 * Created by PhpStorm.
 * User: jeison
 * Date: 20/08/2018
 * Time: 15:03
 */
namespace App\Model;

 class ClassConexao{

    public function conexaoDB(){
     try{
         $con= new \PDO('mysql:host='.HOST.';dbname='.DB.'',USER,PASS);
         return $con;
     }   catch (\PDOException $erro){
         return $erro->getMessage();
     }
    }
}