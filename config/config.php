<?php 

#arquivo diretorio raizes
#variavel e constante definem o caminho absoluto url
$PastaInterna="";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/mvc/{$PastaInterna}");


#constante definem o caminho absoluto fisico o if serve para colocar a "/" e evitar erros do servidor
if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/mvc/{$PastaInterna}");
}else{
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/mvc/{$PastaInterna}");
}

#Diretorios especificos para facilitarquando precisar chamar
#um diretorio especifico o caminho é auto explicativo
#exemplo de maneira simplificada no fim das constantes

define('DIRIMG',"http://{$_SERVER['HTTP_HOST']}/mvc/{$PastaInterna}public/img/");
define('DIRCSS',"http://{$_SERVER['HTTP_HOST']}/mvc/{$PastaInterna}public/css/");
define('DIRJS',"http://{$_SERVER['HTTP_HOST']}/mvc/{$PastaInterna}public/js/");
define('DIRADMIN',"http://{$_SERVER['HTTP_HOST']}/mvc/{$PastaInterna}public/admin/");
define('DIRAUDIO',"http://{$_SERVER['HTTP_HOST']}/mvc/{$PastaInterna}public/audio/");
define('DIRDESIGN',"http://{$_SERVER['HTTP_HOST']}/mvc/{$PastaInterna}public/design/");
define('DIRFONTES',DIRPAGE."public/fontes/");

#constantes para banco de dados
define('HOST',"localhost");
define('DB',"sistema");
define('USER',"root");
define('PASS',"root");


