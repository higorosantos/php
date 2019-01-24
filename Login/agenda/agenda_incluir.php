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
	<input type="hidden" name="data1" id="data1" value="<?php echo $_POST['data']; ?>" />
    <input type="hidden" name="hora1" id="hora1" value="<?php echo $_POST['hora']; ?>" />
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
				include "../config.php";
			  		
				$result = NULL;
				$acao = NULL;
				$query = NULL;  
				
				if(isset($_POST["cancelar"])){	
				  echo "<script>location.href='../agenda.php';</script>";
				}
				if(isset($_POST["incluir"])){
                    $id = NULL;
					$data = $_POST["data"];
                    $hora = $_POST["hora"];
                    $evento = $_POST["evento"];
                    $local = $_POST["local"];
					$query = mysqli_query($conect,"INSERT INTO agenda VALUES ('$id','$data','$hora','$evento','$local')")or die(mysql_error());
					echo "<script>alert('Usuario Cadastrado com sucesso!');</script>";
					echo "<script>location.href='../agenda.php';</script>";
				}
				 
				if(isset($_POST["acao"])){
					switch ($_POST["acao"]){
						case "consultar":
                            $data = $_POST["data1"];
                            $hora = $_POST["hora1"];
                            
							$query = mysqli_query($conect,"SELECT * FROM agenda WHERE data = '$data' and hora = '$hora'") or die(mysql_error());  
							$result = mysqli_num_rows($query);
							if($result == 0){
                                ?>
                                <form class="form-signin" name="form1" id="form1" method="POST" action="#">
								<h2 class="form-signin-heading">Dados do Evento - Consultar</h2>
								<center>
								<label for="inputLogin" >Data</label>
								<input type="text" name="data" id="data" class="form-control" style ='width:150px;text-align:center' value="<?php echo $data;?>" readonly /></br>
								<label for="inputEvento" >Horario</label>
								<input type="text" name="hora" id="hora" class="form-control" style ='width:150px;text-align:center' value="<?php echo $hora;?>" reandonly /></br>	
								<label for="inputEvento" >Evento</label>
                                <input type="text" name="evento" id="evento" class="form-control" style ='width:150px;text-align:center'  /></br>
                                <label for="inputEvento" >Local</label>
								<input type="text" name="local" id="local" class="form-control" style ='width:150px;text-align:center'  /></br>                                
                                <button  type="submit" name="incluir" id="incluir" style ='width:200px'/>Incluir</button>							
								<button  type="submit" name="cancelar" id="cancelar" style ='width:200px'/>Retornar</button>
								</center>
                              </form>
                              <?php					
							}
							else{
								$registro = mysqli_fetch_row($query);
								$data = $registro[1];
								$hora = $registro[2];
                                $evento = $registro[3];
                                $local = $registro[4];
								?>
								<form class="form-signin" name="form1" id="form1" method="POST" action="#">
								<h2 class="form-signin-heading">Dados do Evento - Consultar</h2>
								<center>
								<label for="inputLogin" >Data</label>
								<input type="text" name="data" id="data" class="form-control" style ='width:150px;text-align:center' value="<?php echo $data;?>" readonly /></br>
								<label for="inputEvento" >Horario</label>
								<input type="text" name="hora" id="hora" class="form-control" style ='width:150px;text-align:center' value="<?php echo $hora;?>" readonly /></br>	
								<label for="inputEvento" >Evento</label>
								<input type="text" name="evento" id="evento" class="form-control" style ='width:150px;text-align:center' value="<?php echo $evento;?>" readonly /></br>
                                <label for="inputEvento" >Local</label>
								<input type="text" name="local" id="local" class="form-control" style ='width:150px;text-align:center' value="<?php echo $local;?>" readonly /></br>									
								<button  type="submit" name="cancelar" id="cancelar" style ='width:200px'/>Retornar</button>
								</center>
							  </form>		
						
								
							  
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