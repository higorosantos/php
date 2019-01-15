<?php
session_start();
if ((($_SESSION['pri']) == "Master" || ($_SESSION['pri']) == "Usuario") && $_SESSION["acesso"] == 1){
?>
<body onLoad="checar('consultar');">
<form name="form-usuario" method="POST" action="#">
    <input type="hidden" name="login1" id="login1" value="<?php echo $_POST['login']; ?>" />
    <input type="hidden" name="acao" id="acao"/>

    <?php
    include "config.php";
    $result = NULL;
    $acao = NULL;
    $query = NULL;

    if (isset($_POST["cancelar"])){
        echo "<script>location.href='usuarios.php';</script>";
    }

    if(isset($_POST["acao"])){
        switch ($_POST["acao"]){
            case "consultar":
                $login = $_POST["login1"]; 
                $query = mysqli_query($conect,"SELECT * FROM acesso WHERE login = $login");
                $result = mysqli_num_rows($query);
                if($result == 0){
                    echo "<script> alert('Usuario não Cadastrado!!');</script>";
                    echo "<script> window.location='usuario.php';</script>"
                } else {
                    $registro = mysqli_fetch_row($query);
                    $login = $registro[0];
                    $senha = $registro[1];
                    $privilegio = $registro[2];
                    ?>
        <form class="form-signin" name="form1" method="POST" action="#">
            <h2 class="form-signin-heading">Dados Da Consulta</h2>
            <center>
                <label for="inputlogin">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control"
                value="<?php echo $senha;?>" readonly/><br>

                <button type="submit" name="cancelar" id="cancelar">Retorna</button>