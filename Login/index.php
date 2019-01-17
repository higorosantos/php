 <?php
session_start();
unset ($_SESSION["pri"]);
unset ($_SESSION["acesso"]);


?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<title>Login</title>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading"></h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Login</h2>
   <p>Por favor,Coloque o seu login e sua senha!</p>
   </div>
    <form id="Login" action="acess.php" method="POST" >

        <div class="form-group">


            <input type="text"  name="login" class="form-control" id="login" placeholder="Usuario" size="10" required>

        </div>

        <div class="form-group">

            <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Senha" required>

        </div>
        <div class="forgot">
        <a href="reset.html">Esqueceu sua senha?</a>
</div>
        <button type="submit" class="btn btn-primary">Login</button>
        

    </form>
    </div>
<p class="botto-text"> Designed by Higor Oliveira</p>
</div></div></div>


</body>
</html>
