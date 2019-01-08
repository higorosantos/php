<?php
 echo "O Texto digitado foi: ",$_POST["texto"];
 if($_POST["texto"] == "Higor Oliveira"){
     echo "<br>Senha Correta";
 }
 else{
    echo "<br>Senha Incorreta";
 }
?>