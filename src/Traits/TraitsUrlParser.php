<?php
namespace Src\Traits;

trait TraitsUrlParser{
     #dividir url em array
     public function parserUrl()
     {
         return explode("/",rtrim($_GET['url']),FILTER_SANITIZE_URL);
     }
}

