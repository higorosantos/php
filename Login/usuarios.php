<?php
session_start();
if ((($_SESSION['pri']) == "Master" || ($_SESSION['pri']) == "Usuario") && $_SESSION["acesso"] == 1){
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <style>
            .buttone {
                margin : 4px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="principal.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Sair <span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>
    <form class="form-inline container jumbotron" method="POST" action="#">
        <div class="form-group mx-sm-3 mb-2">
            <label for="user" class="sr-only">Usuario</label>
             <input type="text" class="form-control" id="user" placeholder="Digite o usuario">
         </div>
        <button type="button" class="btn btn-primary mb-2 buttone" onclick="pesquisar()" >Pesquisar</button>
        <button type="button" class="btn btn-primary mb-2 buttone" onclick="excluir()" >Excluir</button>
        <button type="button" class="btn btn-primary mb-2 buttone" onclick="cadastrar()" >Cadastrar</button>
        <button type="button" class="btn btn-primary mb-2 buttone" onclick="modificar()" >Modificar</button>
    </form>
    </body>
   
</html>
<script>
        function pesquisar(){
            if(document.getElementById("user").value == ""){
                alert("Campo Usuario Vazio,por favor preencha!");
        }
        }
</script>


<?php 
}
    else{
     echo "<script>window.location='index.php';</script>";
}
?>