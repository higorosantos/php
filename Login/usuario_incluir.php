<?php
session_start();
if ($_SESSION["pri"] == "Master"  && $_SESSION["acesso"] == 1){
?>
<!DOCTYPE html>
<html lang="pt">
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
  <body onLoad="checar('consultar');">
	<form name="form1" method= "POST" action="#">
		<input type="hidden" name="login1" id="login1" value="<?php echo $_POST['login']; ?>" />
		<input type="hidden" name="acao" id="acao"/>
	</form>
	
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
	  
      <div class="jumbotron" style ='font-size:16px'>
		<?php 
				include "config.php";
			  		
				$result = NULL;
				$acao = NULL;
				$query = NULL;  
				
				if(isset($_POST["cancelar"])){	
				  echo "<script>location.href='usuarios.php';</script>";
				}
				 
				if(isset($_POST["acao"])){
					switch ($_POST["acao"]){
						case "consultar":
							$login = $_POST["login1"];
							$query = mysqli_query($conect,"SELECT * FROM acesso WHERE login = '$login'") or die(mysql_error());       
							$result = mysqli_num_rows($query);
							if($result == 0){
                                ?>
                                <form class="form-signin" name="form1" id="form1" method="POST" action="#">
								<h2 class="form-signin-heading">Dados do Evento - Consultar</h2>
								<center>
								<label for="inputLogin" >Login</label>
								<input type="text" name="login" id="login" class="form-control" style ='width:150px;text-align:center'" readonly /></br>
								<label for="inputEvento" >Senha</label>
								<input type="password" name="senha" id="senha" class="form-control" style ='width:150px;text-align:center'"  /></br>	
								<label for="inputEvento" >Privilégio</label>
                                <select type="text" name="privilegio" id="privilegio" class="form-control" style ='width:150px;text-align:center'  /></br>
                                    <option value="master">Master</option>
                                    <option value="usuario">Usuario</option>
                                    </select><br>	
                                <button  type="submit" name="incluir" id="incluir" style ='width:200px'/>Incluir</button>							
								<button  type="submit" name="cancelar" id="cancelar" style ='width:200px'/>Retornar</button>
								</center>
                              </form>
                              <?php					
							}
							else{
								$registro = mysqli_fetch_row($query);
								$login = $registro[0];
								$senha = $registro[1];
								$privilegio = $registro[2];
								?>	
						
								
							  
								<?php
							}						
					}
				}							
								?>						
     </div>
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<script src="js/ie-emulation-modes-warning.js"></script>
<script type="text/javascript" language="javascript">
	function checar(e){
		document.form1.acao.value = e;
		document.form1.submit();
	}
</script>
<?php 
}
    else{
     echo "<script>window.location='index.php';</script>";
}
?>