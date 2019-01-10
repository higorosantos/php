<?php
$conect = NULL;
$db = NULL;

 $conect = mysqli_connect('localhost','root','');
 $db = mysqli_select_db($conect,'cad_agenda');
 
 mysqli_set_charset($conect,"utf8");
?>