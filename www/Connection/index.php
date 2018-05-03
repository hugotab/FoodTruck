<?php

session_start();
var_dump($_SESSION);


if(!empty($_GET['deconnexion'])){

session_destroy();
session_start();
var_dump($_SESSION);

}



require 'menu.php';

 ?>


<a href="index.php?deconnexion=1">Deconnexion</a>
