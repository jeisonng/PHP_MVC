<?php
namespace App\Model;
class ClassLogin extends ClassConexao {
    #validar usario
    protected function validarUsuario($usuario,$senha){
          $fetch=$this->conexaoDB()->prepare("Select * from login where Usuario=:usuario and Senha=:senha");
          $fetch->bindParam("usuario",$usuario,\PDO::PARAM_STR);
          $fetch->bindParam("senha",$senha,\PDO::PARAM_STR);
          $fetch->execute();
          if($row=$fetch->rowCount()>0){
              return true;
          }else{
              return false;
          }
    }
}