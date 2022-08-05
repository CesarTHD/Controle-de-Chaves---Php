<?php
include_once("../conexao.php");

$sql = "select * from historico";

$resultado = $conexao -> query($sql);

$conexao -> close();

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
    <title>Lista de Chaves</title>
    <link rel="icon" type="img/jpg" href="img/chave - icon.jpg"/>
  </head>
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
      <a href="indexAdministrador.php">
        <i class="fa-solid fa-arrow-right-to-bracket"></i>
        Voltar
      </a>
    </div>

    <section class="">
      <div class="container">
        <div class="row">
        <table class="table text-dark" style="font-size: 1.2em;">
            <thead>
                <tr>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nº da Chave</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Data</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($resultado)){
                        echo "<tr>";
                        echo "<td>".$user_data['matricula']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['num_chave']."</td>";
                        echo "<td>".$user_data['turno']."</td>";
                        echo "<td>".$user_data['dataReserva']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            </table>
        </div>
      </div>
    </section>
    
    
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  </body>
</html>