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
      <label class="logo">Caqptus</label>
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
        <source src="video.mp4" >
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
   <h1 style="font-size: 20px;margin-left: 20px;">A continuación, al darle click en cada imagen, se desglosará información sobre la tecnología, segun corresponda</h1>

  </div>
  <br>
  <?php
if ($tablet_browser > 0) {?>

 <div class="Carousel">
        <h2>Más tecnologías</h2>
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slick-track" id="track">
                <div class="slick">
                    <div>
                        <a href="/">
                            
                          
                                <img src="img/1.jpg" alt="Image">
                            
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            
                                <img src="img/2.jpg" alt="Image">
                            
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            
                                <img src="img/3.jpg" alt="Image">
                            
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            
                                <img src="img/4.jpg" alt="Image">
                                                    </a>
                    </div>
                </div>
                                <div class="slick">
                    <div>
                        <a href="/">
                            
                                <img src="img/4.jpg" alt="Image">
                                                    </a>
                    </div>
                </div>
            </div>
           
            <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
    </div>
<?php }
else if ($mobile_browser > 0) {?>
 <div class="Carousel">
       
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slick-track" id="track">

                <div class="slick">
                    <div>
                        <a href="#" id="imgphp">
                            
                                <img src="img/php.png" id="imgphp">
                            
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#" id="imghtml">
                                

                                <img src="img/html.jpg" alt="Image" id="imghtml">
                            
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#" id="imgjquery">
                            
                                <img src="img/jquery.png" alt="Image" id="imgjquery">
                                                    </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#"  id="imgcss">
                            
                                <img src="img/css.jpg" alt="Image"  id="imgcss" >
                                                    </a>
                    </div>
                </div>
                         <div class="slick">
                    <div>
                        <a href="#" id="imgphp">
                            
                                <img src="img/php.png" id="imgphp">
                            
                        </a>
                    </div>
                </div>

            </div>
           
            <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
    </div>
      <div class="bloque" id="tjquery">
    <div class="container">
      <h2>jQuery</h2>
      <p>jQuery es una biblioteca multiplataforma de JavaScript, creada inicialmente por John Resig, que permite simplificar la manera de interactuar con los documentos HTML, manipular el árbol DOM, manejar eventos, desarrollar animaciones y agregar interacción con la técnica AJAX a páginas web.​</p>
    </div>
  </div>
      <div class="bloque" id="thtml">
    <div class="container">
      <h2>HTML</h2>
      <p>HTML, siglas en inglés de HyperText Markup Language, hace referencia al lenguaje de marcado para la elaboración de páginas web.</p>
    </div>
  </div>
    <div class="bloque" id="tphp">
    <div class="container">
      <h2>Php</h2>
      <p>PHP es un lenguaje de programación de uso general que se adapta especialmente al desarrollo web.​ Fue creado inicialmente por el programador danés-canadiense Rasmus Lerdorf en 1994.​ En la actualidad, la implementación de referencia de PHP es producida por The PHP Group</p>
    </div>
  </div>
      <div class="bloque" id="tcss">
    <div class="container">
      <h2>Css</h2>
      <p>CSS, en español «Hojas de estilo en cascada», es un lenguaje de diseño gráfico para definir y crear la presentación de un documento estructurado escrito en un lenguaje de marcado.​!</p>
    </div>
  </div>
<?php }
else { ?>
     <div class="bloque" >
    <div class="container">
    
    </div>
  </div>
  <div id="cuatro_elements">
    <img src="img/php.png" id="imgphp">
     <img src="img/html.jpg" id="imghtml">
      <img src="img/jquery.png" id="imgjquery">
       <img src="img/css.jpg" id="imgcss">
  </div>
    <div class="bloque" id="tjquery">
    <div class="container">
      <h2>jQuery</h2>
      <p>jQuery es una biblioteca multiplataforma de JavaScript, creada inicialmente por John Resig, que permite simplificar la manera de interactuar con los documentos HTML, manipular el árbol DOM, manejar eventos, desarrollar animaciones y agregar interacción con la técnica AJAX a páginas web.​</p>
    </div>
  </div>
      <div class="bloque" id="thtml">
    <div class="container">
      <h2>HTML</h2>
      <p>HTML, siglas en inglés de HyperText Markup Language, hace referencia al lenguaje de marcado para la elaboración de páginas web.</p>
    </div>
  </div>
    <div class="bloque" id="tphp">
    <div class="container">
      <h2>Php</h2>
      <p>PHP es un lenguaje de programación de uso general que se adapta especialmente al desarrollo web.​ Fue creado inicialmente por el programador danés-canadiense Rasmus Lerdorf en 1994.​ En la actualidad, la implementación de referencia de PHP es producida por The PHP Group</p>
    </div>
  </div>
      <div class="bloque" id="tcss">
    <div class="container">
      <h2>Css</h2>
      <p>CSS, en español «Hojas de estilo en cascada», es un lenguaje de diseño gráfico para definir y crear la presentación de un documento estructurado escrito en un lenguaje de marcado.​!</p>
    </div>
  </div>
<?php }

?>
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
    <div class="Carousel">
        <h2>Más tecnologías</h2>
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slick-track" id="track">
                <div class="slick">
                    <div>
                        <a href="/">
                            
                          
                                <img src="img/ajax.png" alt="Image">
                            
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            
                                <img src="img/git.png" alt="Image">
                            
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            
                                <img src="img/vue.png" alt="Image">
                            
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            
                                <img src="img/mysql.png" alt="Image">
                                                    </a>
                    </div>
                </div>
                                <div class="slick">
                    <div>
                        <a href="/">
                            
                                <img src="img/apache.png" alt="Image">
                                                    </a>
                    </div>
                </div>

            </div>
           
            <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
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
