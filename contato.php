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

  <div class="container rounded">
    <div class="row">
      <div class="col-md-6">
        <h4 class="mb-3 gabriola">Fale Conosco</h4>

        <!--Formulário Fale Conosco-->
        <form action="enviar.php" method="post">
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="primeiroNome">Nome</label>
              <input type="text" class="form-control" id="primeiroNome" name="nome" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="text">Celular</label>
            <input type="text" id="telefone" onkeypress="return SomenteNumero(event)" onkeyup="javascript:makeTel('telefone')" maxlength="14" class="form-control" id="cel" name="celular" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1">Comentário ou Mensagem</label>
            <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>

      <!--Google Maps-->
      <div class="col-md-6 rounded">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5905.155700240645!2d-44.491247!3d-22.462064!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9e793dcf8e8e25%3A0xec1f591b2214bf83!2sR.%20Veneto%2C%20114%20-%20Jardim%20das%20Rosas%2C%20Itatiaia%20-%20RJ%2C%2027580-000!5e1!3m2!1spt-BR!2sbr!4v1651857431765!5m2!1spt-BR!2sbr&maptype=satellite" width="100%" height="370" frameborder="0" style="border:0;"></iframe>
        <ul>
          <li>
            <i class="fas fa-phone"></i>
            <a style="text-decoration: none;" href="tel:+5524981706715"> (24) 98170-6715</a>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <a style="text-decoration: none;" href=mailto:>gianelli.victor.adv@gmail.com</a>
          </li>
        </ul>
      </div>
    </div>

    <!--Rodopé Site-->
    <footer class="fixarRodape">
      <div class="row">
        <div class="col-6 col-md btn-toolbar">
          <a href="https://www.facebook.com/victor.gianelli.13" target="_blank">
            <i class="fab fa-facebook-f" style="font-size:48px; color:black"></i>
          </a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href="https://api.whatsapp.com/send?phone=5524981706715&amp;text=Olá Dr. Victor" target="_blank">
            <i class="fab fa-whatsapp" style="font-size:48px; color:black"></i>
          </a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href="https://www.instagram.com/victor.gianelli/" target="_blank">
            <i class="fab fa-instagram" style="font-size:48px; color:black"></i>
          </a>
        </div>
        <div class="col-6 col-md">
          <h5>Penedo - RJ</h5>
          <ul class="list-unstyled text-small">
            <li><small class="text-muted">Rua Veneto, 114 - Jardim das Rosas - CEP: 27580-000 <br> Cel: (24)98170-6715</small></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>

  <!-- JavaScript -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/fontawesome.js"></script>
  <script src="assets/js/personalizado.js"></script>
</body>

</html>