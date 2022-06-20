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
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="alugado">
    <h5>Seu livro foi alugado com sucesso, retire-o na biblioteca da escola.<h5>
    <h1>Obrigado!</h1>
    <a href="index.php">Voltar à home</a>
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