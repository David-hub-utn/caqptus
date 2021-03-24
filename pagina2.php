<?php
include "dispositivo.php";
?>

<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Navbar | CodingNepal</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

     
  <?php
if ($tablet_browser > 0) {?>

<link rel="stylesheet" href="css/contactomovile.css">
<link rel="stylesheet" href="css/estilos1movile.css">
        <link rel="stylesheet" href="css/parallaxmovile.css">
         <link rel="stylesheet" href="css/carruselmovile.css">
<?php }
else if ($mobile_browser > 0) {?>
<link rel="stylesheet" href="css/contactomovile.css">
<link rel="stylesheet" href="css/estilos1movile.css">
        <link rel="stylesheet" href="css/parallaxmovile.css">
         <link rel="stylesheet" href="css/carruselmovile.css">
<?php }
else { ?>
  <link rel="stylesheet" href="css/contactodesk.css">
  <link rel="stylesheet" href="css/estilos1.css">
        <link rel="stylesheet" href="css/parallax.css">
         <link rel="stylesheet" href="css/carrusel.css">
<?php }

?>
 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">DesignX</label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>

      </ul>
    </nav>
<?php
if ($tablet_browser > 0) {?>
  <br>  <br>  <br>   <br>  

 <div id="movile">
   
 </div>


<?php }
else if ($mobile_browser > 0) {?>
  <br>  <br>  <br>   <br>  

 <div id="movile">
   
 </div>

<?php }
else { ?>

    <div id="video" class="paralax">
      
      <video onloadedmetadata="this.muted=true" autoplay loop >
        <source src="video2.mp4" >
      </video>
    </div>
<?php }

?>


 


  


  <div class="bloque">
    <div class="container">
       <h1>Acerca de este sitio</h1>
     <p>Esta es una prueba técnica para evaluar el desarrollo web en todos los aspectos: Diseño, Maquetado, Programación. En este sitio se utilizarán tecnologías como HTML5, CSS, JavaScript, jQuery, PHP.</p>
    </div>
  </div>

 
  <div class="bloque parallax image-2">
    <div class="container">
    
    </div>
  </div>
 

  </div>

 <br>
    <div class=".fields">
      <br>
    <form  >
                 <label>Contacto</label>
                    
                      <input type="text" name="name" id="name" placeholder="Nombre" required=""/>
                  <br>
                   
                      <input type="email" name="email" id="email" placeholder="Email" required="" />
                 <br>
                 
                      <textarea name="message" id="message" placeholder="Mensaje" required=""></textarea>
                    
                 <button type="button" id="Enviar" class="primary">
                    Enviar
                  </button>
                
                </form>
      </div>

    <footer id="footer">
<span>&copy; Hecho por David Sánchez</span>
          </footer>
  </body>
  <script type="text/javascript">
var expresion=/\w+@\w+\.+[a-z]/;
$('#Enviar').click(function(){
  if($('#name').val()===""){
    swal("Campo nombre vacio","","warning");
    return false;
  }
   else if($('#email').val()===""){
    swal("Campo email vacio","","warning");
    return false;
  }
   else if(!expresion.test($('#email').val())){
    swal("El correo no es válido","","warning");
    return false;
  }
   else if($('#message').val()===""){
    swal("Campo mensaje vacio","","warning");
    return false;
  }
  else
  swal("Mensaje enviado","","success");
 $.ajax({

  type: "POST",
  url: "https://canto.transportesturisticos.mx/enviar_correos.php",
  data: $('#Formulario').serialize(),
   success:  function (response) { 
   
  }
});
$('#name').val("");
$('#email').val("");
$('#message').val("");
});
 </script>
  <script src="js/main.js"></script>
    <script src="js/carrusel.js"></script>
</html>
