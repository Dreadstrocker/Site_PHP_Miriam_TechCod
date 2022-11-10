<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="paginas.css"/>
    <title>Document</title>
</head>
<body>
  
    
    <div id="form_cad">
      <h1><strong>Cadastrar</strong></h1>
    <form method="POST" action="processa_dados.php">
      <input type="text" placeholder = "Nome Completo">
      <input type="text" placeholder="Telefone">
      <input type="email" placeholder="Usuário">
      <input type="password" placeholder="Senha">
      <input type="password" placeholder="Confirmar Senha">
      <div class="Enviar">
      <input type="submit" value="Cadastrar"  name="Cadastro" >
      </div>
    </form>
  </div>
</body>
</html>
<?php

?>