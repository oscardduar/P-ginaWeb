<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    
    <!--Aquí estoy añadiendo código para mi botón de mesenger-->
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "116728216545654", // Facebook page ID
            call_to_action: "Hola, estoy para servirte", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

<!--Aquí estoy añadiendo código para mi botón de mesenger-->

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <a class="navbar-brand pr-0 mr-0" href="#"><div class="imagenheader"><img src="img/icono.png" width="5%" alt="icono"></div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#beneficios">Beneficios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#somos">¿Quienes Somos?</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#contacto">Contáctanos</a>
                </li>
    
                <li class="nav-item active">
                    <a class="nav-link" href="#redes">Redes Sociales</a>
                </li>
              </ul>

            </div>
          </nav>
          
    </header>

<!--Aquí inicia la sección de portada-->
<section id="portada" class="portada">
    <div class="fluid-container">
        <div class="row mr-0 ml-0">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img src="img/portada3.jpg" alt="beneficios">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-3 pt-4 pl-5 pr-5 textoPortada">
                <h4>Páginas Para Todo el Mundo</h4>
                <p>Diseñamos y desarrollamos páginas web para pequeñas y medianas empresas.
                    Nos caracterizamos por algo que llamamos la regla de la CRA, que significa
                    Calidad, Rapidez y Accesibilidad para Todo el mundo. Tenemos una amplia 
                    gama de clientes satisfechos que han transformado sus negocios gracias a una presencia
                    digital. No lo pienses más y aplasta a la competencia con tu página web.
                </p>
               <a  href="https://wa.me/50233381776?text=Me%20gustaría%20tener%20más%20información%20sobre%20los%20servicios%20de%20Páginas%20Web" target="_blank"><button type="button" class="btn btn-success"><i class="fa fa-whatsapp" aria-hidden="true"></i> +502 3338 1776</button></a> <br>
              
               <a href="tel:+50233381776" target="_blank"> <button type="button" class="btn btn-primary"> <i class="fa fa-phone-square" aria-hidden="true"></i>+502 3338 1776</button></a><br>

               <a href="mailto:paginasparatodoelmundo@gmail.com?Subject=Interesad@%20en%20las%20Páginas" target="_blank"> <button type="button" class="btn btn-secondary correo"><i class="fa fa-envelope-o" aria-hidden="true"></i> paginasparatodoelmundo@gmail.com</button></a><br>
               
                
               
            </div>
        </div>
    </div>
   

 
    
    
    
    
    </section>
    
    
    <!--Aquí termina la sección de portada-->
    
    <!--Aquí inicia la sección de descuento-->
    <section class="temporizador">
    <h5>Páginas desde Q850. Antes:<span>Q1350</span>. Esta oferta termina en:</h5>
    <div id="clock" ></div>
    <script src="javascript/temporizador.js"></script>
    </section>


    <!--Aquí termina la sección de descuento-->

    <!--Aquí inicia la sección sobre nosotros-->
    <section class="beneficios" id="beneficios">
        <div class="fluid-container">
            <div class="row mr-0 ml-0">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img src="img/beneficios4.jpg" alt="beneficios">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pb-3 pt-4">
                    <h5>Optimizada para móviles</h5>
                    <p>La desarrollamos para que sea vista perfectamente y con mucha comodidad desde móviles</p>
                    <h5>Velocidad de Carga</h5>
                    <p>Muchos usuarios de internet abandonan una página debido a la lentitud de carga, nosotros te ahorramos este problema<p>
                    <h5>Precios Accesibles</h5>
                    <p>Estamos orientados a las pequeñas y medianas empresas, por lo que cuidamos mucho tu presupuesto</p>
                </div>
            </div>
        </div>
        </section>
        
        
        <!--Aquí termina la sección sobre nosotros-->

        <!--Aquí empieza la sección de redes sociales y contacto-->
        <section class="contacto">
            <div class="fluid-container">
                <div class="row mr-0 ml-0">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 pb-3 pt-4" id="somos">
                     <h4>¿Quienes Somos?</h4>
                        <p>Creemos fuertemente que las pequeñas y medianas empresas deben de 
                            tener una fuerte presencia en internet para ser competitivas, lamentablemente
                            hemos observado que muchas veces el presupuesto de estos negocios que aún estan 
                            comenzando no les permite tener al menos una página web, lo cuál es indisplensable
                            para la ya mencionada presencia digital, es por eso que nosotros hemos desarrollado
                            técnicas y métodos de trabajo para poder brindar Páginas Web de Calidad Para Todo el Mundo,
                            Puedes Contactarnos para resolver cualquier duda que pueda surgirte, tenemos los mejores precios para tí.
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 pb-3 pt-4" id="contacto">
                       <!--Aquí inicia el formulario-->
                    <h4>Contáctanos</h4>
                    <form method="post">
                     <div class="form-group">
          
                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre" name="name" required="">
          
                    </div>
                    <div class="form-group">
           
                            <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mensaje" name="msg" required="">
            
                    </div>
                    <div class="form-group">
           
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefono" name="phone" required="">
            
                    </div>
     
                    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                    </form>
                

                    <!--Aquí termina el formulario-->
                    <!--Aquí empieza la parte de datos-->
                    <a  href="https://wa.me/50233381776?text=Me%20gustaría%20tener%20más%20información%20sobre%20los%20servicios%20de%20Páginas%20Web" target="_blank"><button type="button" class="btn btn-success"><i class="fa fa-whatsapp" aria-hidden="true"></i> +502 3338 1776</button></a> <br>
              
                    <a href="tel:+50233381776" target="_blank"> <button type="button" class="btn btn-primary"> <i class="fa fa-phone-square" aria-hidden="true"></i>+502 3338 1776</button></a><br>
     
                    <a href="mailto:paginasparatodoelmundo@gmail.com?Subject=Interesad@%20en%20las%20Páginas" target="_blank"> <button type="button" class="btn btn-secondary correo"><i class="fa fa-envelope-o" aria-hidden="true"></i> paginasparatodoelmundo@gmail.com</button></a><br>
                    
                     <?php
					include("correo.php");
					?>
                     
                     <!--Aquí termina la parte de datos-->
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 pb-3 pt-4" id="redes">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FP%25C3%25A1ginas-Para-Todo-el-Mundo-116728216545654%2F&tabs=timeline&width=340&height=414&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2611187799113986" width="340" height="414" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>



        </section>

        
        <footer>
            <p>© Todos los Derechos Reservados</p>
        </footer>

         <!--Aquí termina la sección de redes sociales y contacto-->

<!--Aquí estan los enlaces para que funcione bootstrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!--Aquí estan los enlaces para que funcione bootstrap-->
</body>
</html>
