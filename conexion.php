<?php
$servidor="127.0.0.1";
$usuario="root";
$password="";
$db="";
$coneta = mysqli_connect($servidor,$usuario,$password,$db) or die ("Error");
mysqli_query($coneta,"SET NAMES 'utf8'")
 ?>
