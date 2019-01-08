<?php
 echo "O Texto digitado foi: ",$_GET["texto"];
 if($_GET["texto"] == "Higor Oliveira"){
     echo "<br>Senha Correta";
 }
 else{
    echo "<br>Senha Incorreta";
 }
?>