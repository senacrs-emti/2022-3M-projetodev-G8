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
    
    <include src="includes/header.php"></include>

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Nossas categorias</h2>
          <span>Categorias</span>
          <p class="section-subtitle">Encontre aqui nossas principais categorias literárias</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="pagina-tudo.php">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon color-1">
                  <i class="lni-pencil"></i>
                </div>
                <h4>Leituras obrigatórias</h4>
                <p>Categoria de leituras obrigatórias do Ensino Médio Distrito Criativo, aqui você encontra livros de todas as matérias presentes na matriz curricular e mais.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="pagina-tudo.php">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
                <div class="icon color-4">
                  <i class="lni-graduation"></i>
                </div>
                <h4>Indicados pelo Senac</h4>
                <p>Aqui você encontra as indicações da nossa escola para os alunos, desde livros clássicos como Romeu e Julieta até os mais modernos, como O Morro dos Ventos Uivantes.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="pagina-tudo.php">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
                <div class="icon color-2">
                  <i class="lni-crown"></i>
                </div>
                <h4>Para ler antes de morrer</h4>
                <p>Clique aqui para ver nossas indicações de livros que você não pode deixar de ler, dos mais lidos aos merecedores de mais reconhecimento.</p>
              </div>
            </a>
          </div>
        </div>
        
        <!-- Botão p/ pagina tudo -->
        <div class="btn">
          <a href="pagina-tudo.php" class="btn btn-lg btn-common btn-effect wow fadeInUp" role="button" aria-pressed="false">Mais Livros</a>
        </div>
            
        <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
        <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
        <script>
          $(function () {
            $('.dropdown-toggle').dropdown();
          }); 
        </script>
      </div>
    </section>
    <!-- Fim da seção de lista -->
    
    <include src="includes/footer.php"></include>

    <!-- Botão p/ voltar ao topo -->
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