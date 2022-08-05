<?php
  session_start();
  // Se o usuário não está logado, manda para página de login.
  if (!isset($_SESSION['user'])){
    header("Location: loginAdministrador.html");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/65bb913019.js" crossorigin="anonymous"></script>
    
    <!-- Estilo customizado -->
    <link rel="stylesheet" href="../meu-css/estilo.css">

    <!-- JavaScript -->
    <script src="script.js"></script>
    <title>Login - Administrador</title>
    <link rel="icon" type="img/jpg" href="img/chave - icon.jpg"/>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="../index.html">
          <img src="../img/IFB - Logo.png" alt="" width="250" class="d-inline-block align-text-top">
        </a>
      </div>
    </nav>
    
    <div class="voltar">
      <a href="../index.html">
        <i class="fa-solid fa-arrow-right-to-bracket"></i>
        Sair
      </a>
    </div>

    <section class="opcoes">
      <h4 class="display-6">Opções:</h4>
      <ul>
        <li>
          <a class="btn btn-outline-success" href="cadastraFuncionario.html">Cadastrar Funcionário</a>
        </li>
        <li>
          <a class="btn btn-outline-success" href="listaFuncionarios.php">Listar Funcionários</a>
        </li>
        <li>
          <a class="btn btn-outline-success" href="registraChave.html">Registrar Chave</a>
        </li>
        <li>
          <a class="btn btn-outline-success" href="listaChaves.php">Listar Chaves</a>
        </li>
        <li>
          <a class="btn btn-outline-success" href="historico.php">Histórico</a>
        </li>
      </ul>
    </section>

    <footer>
      <div class="text-center p-4">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="">César Tallys</a>
      </div>
    </footer>


  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  </body>
</html>