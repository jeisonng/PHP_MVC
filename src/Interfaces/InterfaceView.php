<?php
/**
 * Created by PhpStorm.
 * User: jeison
 * Date: 20/08/2018
 * Time: 10:25
 */
namespace Src\interfaces;

interface InterfaceView{
    public function setDir($dir);
    public function setTitle($title);
    public function setDescription($description);
    public function setKeywords($keywords);
    public function renderLayout();

}