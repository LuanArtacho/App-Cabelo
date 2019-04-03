   <?php
   session_start();
  header("content-type: text/html;charset=utf-8");
   $nome=$_SESSION['nome'];
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
<link rel="manifest" href="manifest.json">

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

  echo 'Olá ';
  echo $_SESSION["nome"];
    ?>

    <li><a href="inicio.php">Home</a></li>
    <li><a href="#">Corte</a></li>
    <li><a href="#">Manicure</a></li>
    <li><a href="#">Estética</a></li>
    <li><a href="#">Protese Capilar</a></li>
    <li><a href="login.php">Login</a></li>
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Sobre</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Sobre Nós</a>
    <a href="#">Suporte</a>
    <a href="criaconta.php">Criar Conta</a>
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

  <div id="formulacrico" style="margin-top:25%">
  <form method="get" action="php/criaconta.php">

<label id="nomecc">  Nome: </label><br>  
  <input type="text" name="fnome" maxlength="80" 
  style="width: 320px" ><br><br>


    <label id="sobrenomecc">  Sobrenome:</label>  
  <input type="text" name="fsobrenome" maxlength="80"
  style="width: 270px" ><br><br>


    <label id="emailcc">  E-mail:</label>  
  <input type="text" name="femail" maxlength="80" 
  style="width: 320px"><br><br>


  <label id="senhacc">  Senha:</label><br> 
  <input type="password" name="fsenha" maxlength="80" 
  style="width: 320px"><br><br>


  <label id="confsenhacc">Confirmar Senha:</label>  
  <input type="password" name="fcsenha" maxlength="80" 
  style="width: 220px"><br><br>

    <input type="submit" value="Cadastrar" id="cadastrarcc">

    <input type="reset" value="Limpar"
    id="limparcc">
  </form>
</div>