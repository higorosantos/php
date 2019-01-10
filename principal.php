<!DOCTYPE <!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<head><title>Page Title</title></head>>


<body>
<form method="POST" action="recebe.php">
<form>
  <div class="form-group">
  <label for="cpf">CPF</label>
             <input type="text" class="form-control" id="cpf" name="cpf"placeholder="000.000.000-00" autofocus required>
    
  </div>
  <div class="form-group">
  <label for="nome">Nome completo</label>
             <input type="text" class="form-control" id="nome" name="nome" required>
  </div>
  <div class="form-group">
             <label for="email">Email</label>
             <input type="email" class="form-control" id="email" name="email"placeholder="testando@gmail.com" required>
             <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
         </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Confirmar Envio  </button>
</form>
 </form>
    
</body>

</html>