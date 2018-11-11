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
use App\Model\ClassCadastro;
class ControllerCadastro extends ClassCadastro{
    protected $id;
    protected $nome;
    protected $sexo;
    protected $cidade;

    use \Src\Traits\TraitsUrlParser;
    public function __construct()
    {
        if(count($this->parserUrl())==1) {
            $render = new ClassRender();
            $render->setTitle("Cadastro");
            $render->setDescription("Faça seu cadastro");
            $render->setKeywords("cadastro de clientes");
            $render->setDir("cadastro");
            $render->renderLayout();
        }

    }
    public function variaveis(){
        if (isset($_POST['Id'])){
           // $this->id=filter_input($this->id=$_POST['Id']);
           $this->id=$_POST['Id'];


        }
      if (isset($_POST['Nome'])){
          $this->nome=filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS);
          }
        if (isset($_POST['Sexo'])){
            $this->sexo=filter_input(INPUT_POST,'Sexo',FILTER_SANITIZE_SPECIAL_CHARS);

        }
        if (isset($_POST['Cidade'])){
            $this->cidade=filter_input(INPUT_POST,'Cidade',FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }

    #chamar metodo de cadastro
    public function cadastrar(){
            $this->variaveis();
            parent::cadastroCliente($this->nome,$this->sexo,$this->cidade);
            echo 'Cadastro Efetuado com Sucesso!';

    }
    #select no banco
    public function seleciona(){
         $this->variaveis();
         $b=$this->selectCliente($this->nome,$this->sexo,$this->cidade);
        // echo '<pre>';print_r($b);echo '</pre>';
        echo "<br><br><br><br>
          <form name='FormDeletar' id='FormDeletar' action='".DIRPAGE."cadastro/deletar' method='post'>
          
          
          

          <table  class='table table-dark' border='1'>
                     <tr>
                       <td>ação</td>
                       
                       <td>Nome: </td>
                       <td>Sexo: </td>
                       <td>Cidade: </td>
                     </tr>
               
             ";
         foreach ($b as $c){
             echo " <tr>
                       <td><input type='checkbox' name='Id[]' value='$c[Id]'><img class='imageEdit' rel='$c[Id]' style='height: 20px; width: 20px;' src='".DIRIMG."caneta.jpg'></td>
                       <td>$c[nome] </td>
                       <td>$c[Sexo] </td>
                       <td>$c[Cidade] </td>
                     </tr>";
         }

         echo "</table>
 <input value='Deletar' type='submit'><br><br><hr>
 </form>";
    }
    #Delete
    public function deletar()
    {
        $this->variaveis();
        foreach ($this->id as $iddeletar) {
            $this->deletCliente($iddeletar);
        }


    }
    #puchando dados do DB
    public function puxaDB($id){
        $this->variaveis();
        $b=$this->selectCliente($this->nome,$this->sexo,$this->cidade);

        foreach ($b as $c){
            if ($c['Id']==$id){
                $nome= $c['nome'];
                $sexo= $c['Sexo'];
                $cidade= $c['Cidade'];
            }
        }


        echo "
        <form name='FormAtualizar' class='form-group form-check form-text' 
        id='FormAtualizar' method='post' action='".DIRPAGE."cadastro/atualizar'>
<input type='hidden' name='Id' id='Id' value='$id'><br>
<input type='text' name='Nome' id='Nome' value='$nome'><br>
Sexo: <select id='Sexo' name='Sexo'>
        <option value='$sexo'>$sexo</option>
        <option value='masculino'>Masculino</option>
        <option value='feminino'>Feminino</option>
    </select><br>
    Cidade: <input type='text' name='Cidade' id='Cidade' value='$cidade'><br>
    <input type='submit' value='Atualizar'>
</form><br><hr><br>
        ";

    }
    public function atualizar(){
        $this->variaveis();
        $this->atualizarClientes($this->id,$this->nome,$this->sexo,$this->cidade);
        echo 'atualizadocom sucesso';
    }
}