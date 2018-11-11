<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="autor" CONTENT="Jeison Guimaraes Azevedo" >
    <meta name="viewport" CONTENT="width=device-width, initial-scale=1" >
    <meta name="description" CONTENT="<?php echo $this->getDescription();?>" >
    <meta name="keywords" CONTENT="<?php echo $this->getKeywords();?>" >
    <title><?php echo $this->getTitle();?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css'?>">
    <link rel="stylesheet" href="<?php echo DIRCSS.'/css/bootstrap.css'?>">
    <script src="<?php echo DIRJS.'jquery.min.js' ?>"></script>
    <script src="<?php echo DIRJS.'javascript.js' ?>"></script>

    <?php echo $this->addHead();?>
</head>
<body>

<div class="Nav">
  <a href="<?php echo DIRPAGE?>">Home</a>
  <a href="<?php echo DIRPAGE.'contato'?>">Contato</a>
    <a href="<?php echo DIRPAGE.'cadastro'?>">cadastro</a>
    <a href="<?php echo DIRPAGE.'login'?>">Login</a>

</div>

<div class="Header">
    <img class="teste" src="<?php echo DIRIMG.'banner.jpg'?>">
    <?php
    $breadcrumb = new Src\Classes\classBreadcrumb();
    $breadcrumb->addBreadcrumb();
    ?><br><br><hr>
    TEL:(XX) XXXXX-XXXX
    <?php echo $this->addHeader();?>

</div>


<div class="Main">
    <?php echo $this->addMain();?>
</div>

<div class="Footer">
    <?php echo $this->addFooter();?>
    2018-Todos Direitos Reservados Jeison Guimarães azevedo<br>

</div>



</body>
</html>
