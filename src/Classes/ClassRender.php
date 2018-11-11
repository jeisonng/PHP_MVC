<?php
/**
 * Created by PhpStorm.
 * User: jeison
 * Date: 20/08/2018
 * Time: 10:05
 */
namespace Src\Classes;

class ClassRender{
    #Propriedades
    private $dir;
    private $title;
    private $description;
    private $keywords;


    public function getDir(){return $this->dir;}
    public function setDir($dir){$this->dir = $dir;}
    public function getTitle(){return $this->title;}
    public function setTitle($title){$this->title = $title;}
    public function getDescription(){return $this->description;}
    public function setDescription($description){$this->description = $description;}
    public function getKeywords(){return $this->keywords;}
    public function setKeywords($keywords){$this->keywords = $keywords;}


    #Metodo responsavel por Renderizar todos layout
    public function renderLayout(){
      include_once DIRREQ."app/view/layout.php";
    }
    public function addHeader(){
        if (file_exists(DIRREQ."app/view/{$this->getDir()}/header.php")){
            include DIRREQ."app/view/{$this->getDir()}/header.php";
        }
    }
    #esse Metodo acrescenta caracteristicas ao Head
    public function addHead(){
     if (file_exists(DIRREQ."app/view/{$this->getDir()}/head.php")){
         include DIRREQ."app/view/{$this->getDir()}/head.php";
     }
    }
    #esse Metodo acrescenta caracteristicas ao Main
    public function addMain(){
        if (file_exists(DIRREQ."app/view/{$this->getDir()}/main.php")){
            include DIRREQ."app/view/{$this->getDir()}/main.php";
        }
    }
    #esse Metodo acrescenta caracteristicas ao Footer
    public function addFooter(){
        if (file_exists(DIRREQ."app/view/{$this->getDir()}/footer.php")){
            include DIRREQ."app/view/{$this->getDir()}/footer.php";
        }
    }

}