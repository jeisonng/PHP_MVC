<?php
/**
 * Created by PhpStorm.
 * User: jeison
 * Date: 21/08/2018
 * Time: 06:26
 */
namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao{

    private $DB;
    #Cadastrará cliente no sistema
    protected function cadastroCliente($nome,$sexo,$cidade){

        $id=0;
        $this->DB=$this->conexaoDB()->prepare("INSERT INTO teste VALUES(:id , :nome , :sexo , :cidade )");
        $this->DB->bindParam(":id",$id,\PDO::PARAM_INT);
        $this->DB->bindParam(":nome",$nome,\PDO::PARAM_STR);
        $this->DB->bindParam(":sexo",$sexo,\PDO::PARAM_STR);
        $this->DB->bindParam(":cidade",$cidade,\PDO::PARAM_STR);
        $this->DB->execute();

    }
    protected function selectCliente($nome,$sexo,$cidade){

        $nome='%'.$nome.'%';
        $sexo='%'.$sexo.'%';
        $cidade='%'.$cidade.'%';
        $bfetch=$this->DB=$this->conexaoDB()->prepare("SELECT * FROM teste WHERE nome LIKE :nome AND Sexo LIKE :sexo AND Cidade LIKE :cidade");
        $bfetch->bindParam(":nome",$nome,\PDO::PARAM_STR);
        $bfetch->bindParam(":sexo",$sexo,\PDO::PARAM_STR);
        $bfetch->bindParam(":cidade",$cidade,\PDO::PARAM_STR);
        $bfetch->execute();

        $i=0;
        while($fetch=$bfetch->fetch(\PDO::FETCH_ASSOC)){
            $array[$i]=['Id'=>$fetch['Id'],'nome'=>$fetch['nome'],'Sexo'=>$fetch['Sexo'],'Cidade'=>$fetch['Cidade']];
            $i++;
        }
        //print_r($array);
        return $array;

    }

    protected function deletCliente($id){

      $bfetcha=$this->DB=$this->conexaoDB()->prepare("DELETE FROM teste WHERE Id=:id");
        $bfetcha->bindParam(":id",$id,\PDO::PARAM_INT);
       $bfetcha->execute();



    }
    #atualizar clientes
    protected function atualizarClientes($id,$nome,$sexo,$cidade){

        $bfetch=$this->DB=$this->conexaoDB()->prepare("UPDATE teste SET nome=:nome, Sexo=:sexo, Cidade=:cidade WHERE Id=:id");
        $bfetch->bindParam(":id",$id,\PDO::PARAM_INT);
        $bfetch->bindParam(":nome",$nome,\PDO::PARAM_STR);
        $bfetch->bindParam(":sexo",$sexo,\PDO::PARAM_STR);
        $bfetch->bindParam(":cidade",$cidade,\PDO::PARAM_STR);
        $bfetch->execute();

    }
}