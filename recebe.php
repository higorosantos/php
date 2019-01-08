<?php
 echo "O Nome Digitado foi: ",$_POST["nome"];
 echo "<br>";
 echo "<br>";
 echo "O CPF Digitado foi: ",$_POST["cpf"];
 echo "<br>";
 echo "<br>";
 echo "O Email Digitado foi: ",$_POST["email"]; 
 echo "<br>";
 echo "<br>";
 if (isset($_POST["check"])){
     echo "Confirmou o otario";
 }
 else {
     echo "O Cara nao Confirmou mano";
 }
?>