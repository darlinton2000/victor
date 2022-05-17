<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Darlinton Luis Siqueira">
  <link rel="icon" href="assets/img/Icon/favicon.ico">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <title>Victor H. Gianelli Advocacia</title>
</head>

<body>
  <!--Menu-->
  <?php
  require_once "menu.html";
  ?>

  <!--Banner principal-->
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 id="texto" class="display-4 font-weight-normal" style="font-family: Gabriola; font-size: 55pt;">Victor H. Gianelli</h1>
      <p class="lead font-weight-normal">Penal / Tributário / Consumidor</p>
      <p class="lead font-weight-normal">OAB/RJ 226.307</p>
      <p class="lead font-weight-normal">Advocacia e Consultoria Jurídica</p>
    </div>
    <div class="product-device product-device-2 shadow-sm d-none d-lg-none d-xl-block"></div>
    <div class="product-device shadow-sm d-none d-lg-none d-xl-block"></div>
  </div>
  
  <div class="container">
    <div class="row">

      <!--Primeiro Card-->
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="assets/img/01.jpg" height="220" alt="Quem Somos">
          <div class="card-body">
            <p class="card-text"><b>Quem Somos</b></p>
            <p class="card-text">Conheça um pouco sobre o Dr. Victor H. Gianelli.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="quem_somos.php">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Leia Mais</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Segundo Card-->
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5905.155700240645!2d-44.491247!3d-22.462064!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9e793dcf8e8e25%3A0xec1f591b2214bf83!2sR.%20Veneto%2C%20114%20-%20Jardim%20das%20Rosas%2C%20Itatiaia%20-%20RJ%2C%2027580-000!5e1!3m2!1spt-BR!2sbr!4v1651857431765!5m2!1spt-BR!2sbr&maptype=satellite" width="100%" height="220" frameborder="0" style="border:0;"></iframe>
          <div class="card-body">
            <p class="card-text"><b>Localização</b></p>
            <p class="card-text">Atualmente o Dr. Victor H. Gianelli está presente na região Sul Fluminense em Penedo.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="https://maps.google.com/maps?ll=-22.462064,-44.491247&z=15&t=m&hl=pt-BR&gl=BR&mapclient=embed&q=R.%20Veneto%2C%20114%20-%20Jardim%20das%20Rosas%20Itatiaia%20-%20RJ%2027580-000" target="_blank">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Leia Mais</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Terceiro Card-->
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="assets/img/02.jpg" height="220" alt="Áreas de Atuação">
          <div class="card-body">
            <p class="card-text"><b>Áreas de Atuação</b></p>
            <p class="card-text">Clique aqui e conheça todas as áreas de atuação do escritório.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="area_atuacao.php">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Leia Mais</button>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!--Rodopé-->
    <?php
      require_once "rodape.html";
    ?>
  </div>

  <!--JavaScript-->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/fontawesome.js"></script>
</body>

</html>