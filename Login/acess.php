<?php

session_start();
$_SESSION["acesso"] = 1;
include  "config.php";

$resultado = NULL;
$query = NULL;
$senha = $_POST["senha"];
$login = $_POST["login"];

$query = mysqli_query($conect, "SELECT * from acesso  WHERE login  = '$login' AND senha ='$senha' ") or die(mysqli_error());
$resultado = mysqli_num_rows($query);
if($resultado == 0){
    unset ($_SESSION["pri"]);
    echo "<script>alert('Senha Incorreta, Por favor verifique os dados informados!')</script>";
    echo "<script>window.location='index.php';</script>";
}
else {
    $registro = mysqli_fetch_row($query);
   $login = $registro[0];
   $senha = $registro[1];
   $privilegio = $registro[2];
   $_SESSION["pri"] = $privilegio;
   echo "<script>alert('Bem Vindo Ao Sistema');</script>";
   echo "<script>window.location='principal.php';</script>";
}

?>