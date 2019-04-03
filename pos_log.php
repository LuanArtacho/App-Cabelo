   <?php
   session_start();
  header("content-type: text/html;charset=utf-8");
    ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/geral.css">
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <title>SALÃO DE CABELERO</title>
</head>
<body>
<div>
  
</div>

<div class="container">
    <div class="nav-toggle">
      <div class="nav-toggle-bar"></div>
    </div>
  <nav class="nav">
    <img src="img/logo.jpg" id="logo" class="pure-img">
  <ul id="ul">


  <?php
if (!empty($_SESSION['nome'])) {

  echo 'Olá ';
  echo $_SESSION["nome"];}
    ?>


    <li><a href="inicio.php">Home</a></li>
    <li><a href="calendariocabelo.php">Corte</a></li>
    <li><a href="#">Manicure</a></li>
    <li><a href="#">Estética</a></li>
    <li><a href="#">Protese Capilar</a></li>
    <li><a href="login.php">Minha Conta</a></li>
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Sobre</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Sobre Nós</a>
    <a href="#">Suporte</a>
    <a href="criaconta.html">Criar Conta</a>
    <a href="#">Pagamento</a>
    <a href="#">Localização</a>
  </div>
</div>

  </ul>
</nav>

<script>

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script>
  (function() {

  var hamburger = {
    navToggle: document.querySelector('.nav-toggle'),
    nav: document.querySelector('nav'),

    doToggle: function(e) {
      e.preventDefault();
      this.navToggle.classList.toggle('expanded');
      this.nav.classList.toggle('expanded');
    }
  };

  hamburger.navToggle.addEventListener('click', function(e) { hamburger.doToggle(e); });

}());
</script>

<h1 style="margin-top:25%;margin-left:30%;font-size:42px">PERFIL</h1>

<?php
if (!empty($_SESSION['nome'])) {

  echo 'Olá ';
  echo $_SESSION["nome"];}
    ?>
    <br>


<button id="agenda" style="
    background-color:#4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;">AGENDA</button>
<br>
<br>



<button id="editperfil">EDITAR PERFIL</button>

<form action="php/desloga.php">
<a href="#"><input type="submit" name="desloga" value="DESLOGAR" id="editperfil"></input></a>
</form>
</div>
</body>
</html>