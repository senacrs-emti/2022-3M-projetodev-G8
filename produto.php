<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="author" content="Grayrids">
<title>Biblioteca Senac</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/line-icons.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/color-switcher.css">
<link rel="stylesheet" href="css/menu_sideslide.css">
<link rel="stylesheet" href="css/main.css">    
<link rel="stylesheet" href="css/responsive.css">

</head>
  
<body>
  <?php
  include_once 'includes/header2.php';
  include_once 'conexao.php';
  ?>

  <!-- alinhando -->
  <section class="our-team">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1></h1>
        </div>

        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM livros WHERE LivroID = {$id}";
        $res = mysqli_query($conn, $sql);
        $i = mysqli_fetch_array($res);
        ?>

        <?php
        $sql = "SELECT * FROM categorias";
        $res = mysqli_query($conn, $sql); 
        $j = mysqli_fetch_array($res);
        ?>

        <div class="col-7">
          <img class="imgproduto" src="livros/<?php echo $i['Foto'];?>">
        </div>

        <div class="col-5">
        <nbsp></nbsp>
          <div class="row justify-content-md-center">
            <form class="form-inline my-2 my-lg-0">
              <p class="card-texto">Dados necessários para efetuar o aluguel do livro:</p>
              <input class="form-control mr-sm-2" type="text" placeholder="Nome Completo" aria-label="Nome Completo">
              <input class="form-control mr-sm-2" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="CPF" aria-label="CPF"> placeholder="CPF" aria-label="CPF">
              <a href="alugado.php" class="btn btn-lg btn-common btn-effect wow fadeInUp" role="button" aria-pressed="false">Alugar</a>
            </form>
          </div>
        </div>

        <div class="sobrelivro col-12">
        <br>
        <h5><?php echo $i['Titulo'];?></h5>
        <p class="categorialivro"><?php echo $j['Nome'];?></p>
        <p class="autorlivro"><?php echo $i['Autor'];?></p>
          <div class="descricao">
            <p><?php echo $i['Descricao'];?></p>
          </div>
        </div>

      </div>
    </div>
  </section>

    <include src="includes/footer.php"></include>

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
  <i class="lni-arrow-up"></i>
</a>

<div id="loader">
  <div class="spinner">
    <div class="double-bounce1"></div>
    <div class="double-bounce2"></div>
  </div>
</div>    

<script src="https://unpkg.com/htmlincludejs"></script>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="js/jquery-min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/color-switcher.js"></script>
<script src="js/jquery.mixitup.js"></script>
<script src="js/nivo-lightbox.js"></script>
<script src="js/owl.carousel.js"></script>    
<script src="js/jquery.stellar.min.js"></script>    
<script src="js/jquery.nav.js"></script>    
<script src="js/scrolling-nav.js"></script>    
<script src="js/jquery.easing.min.js"></script>     
<script src="js/wow.js"></script> 
<script src="js/jquery.vide.js"></script>
<script src="js/jquery.counterup.min.js"></script>    
<script src="js/jquery.magnific-popup.min.js"></script>    
<script src="js/waypoints.min.js"></script>    
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>   
<script src="js/main.js"></script>
    
<script>
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
}
</script> 

</body>
</html>