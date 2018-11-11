<?php
namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes{
    #Atributos
    private $Method;
    private $Param=[];
    private $Obj;


    protected function getMethod()
    {
        return $this->Method;
    }
    public function setMethod($Method)
    {
        $this->Method = $Method;
    }
    protected function getParam()
    {
        return $this->Param;
    }
    public function setParam($Param)
    {
        $this->Param = $Param;
    }



    #Metodo construtor
    public function __construct()
    {
        self::addController();
    }
    #Metodo de adição de controller
    private function addController(){
        $RotaController=$this->getRota();
        $NameS="App\\Controller\\{$RotaController}";
        $this->Obj=new $NameS;

        if(isset($this->parserUrl()[1])){
            self::addMethod();
        }
    }
    #Metodo de adição de método do controller
    private function addMethod(){
        if(method_exists($this->Obj,$this->parserUrl()[1])){
            $this->setMethod("{$this->parserUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj,$this->getMethod()],$this->getParam());
        }else{

        }
    }
    #Metodo de adição de parametros do controlle
    private function addParam(){
         $ContArray=count($this->parserUrl());

         if($ContArray>2){
             foreach ($this->parserUrl() as $Key => $value){
                 if($Key>1){
                     $this->setParam($this->Param +=[$Key => $value]);
                 }
             }

         }
    }
}