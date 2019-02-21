<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>CRUD - Cadastrar</title>   
  </head>
  <body>
    <h1>Cadastrar Usuário</h1>
    <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contato.php">Contato</a>
    </li>
  </ul>
</nav>

  <br>
  <div class="container">
    <ul>
  <form method="post" action="processa.php">
  
  <div class="form-group">
    <label for="exampleInputNome">Nome</label>
    <input type="text" name="nome" class="form-control" id="exampleInputNome" placeholder="Nome">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="email"  class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <label for="exampleInputTelefone">Telefone</label>
    <input type="number" name="telefone" class="form-control" id="exampleInputTelefone" aria-describedby="telefoneHelp" placeholder="Seu telefone">
    <small id="number" class="form-text text-muted">Nunca vamos compartilhar seu telefone, com ninguém.</small><br>
  
  <div class="form-group">
    <label for="exampleInputMensagem">Mensagem</label><br>
    <textarea type="text" name="mensagem" rows="10" cols="60" wrap="virtual"></textarea></p><br>
    </div>
     <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</ul>
</div>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  </body>
</html>