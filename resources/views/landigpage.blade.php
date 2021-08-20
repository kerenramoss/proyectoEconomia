<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>catracho El Catracho Viajero</title>

        <!-- Fonts -->
        <link href="/css/landing.css" rel="stylesheet">
        <!--link rel="stylesheet" href="{{asset('css/landing.css')}}"-->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
   <header>
  <nav>
      <a href="#">Acerca de</a>
      <a href="#">Servicios</a>
      <a methd="get" href="{{url('RegistroArrendador/create')}}">Registrarse</a>
      <a methd="get" href="{{url('ingresar/create')}}">Ingresar</a>
      </nav>
      <section class="texto_header">
          <h1>Visita los Rincones Escondidos de Honduras</h1>
          <h2>Viaja por Toda Honduras</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-0.90,21.01 C150.00,150.00 353.49,-51.01 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
 </header> 
 <main>
     <section class="contenedor sobre-nosotros">
         <h2 class="titulo">Acerca de</h2>
         <div class="contenedor-sobre-nosotros">
             <img src="{{asset('css/image/sobremi.png')}}" alt="" class="imagen-sobre-nosotros">
             <div class="contenido-textos">
             <h3><span>1</span>Mision</h3>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem dolorum officiis earum temporibus doloremque hic corrupti, repellendus libero ab et quia quae quos eum molestiae tempora asperiores error in minus.</p>
             <h3><span>2</span>Vision</h3>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem dolorum officiis earum temporibus doloremque hic corrupti, repellendus libero ab et quia quae quos eum molestiae tempora asperiores error in minus.</p>
       </div>  
    </div>
     </section>
     <section class="servicios">
         <div class="contenedorservice">
             <h2 class="titulo">Nuestros Servicios</h2>
            <div class="cont-serv">
            <div class="servicio-ind">
                <img src="{{asset('css/image/registro.png')}}" alt="" class="imagen-sobre-servicio">
                <h3 class="ser">Registrate</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nam maxime minus iusto cum. Nihil perspiciatis iste, maiores, vel quo praesentium minima rerum quae sequi harum molestias, quis facere mollitia.</p>
            </div>
            <div class="servicio-ind">
                <img src="{{asset('css/image/hotel.png')}}" alt=""  class="imagen-sobre-servicio2">
                <h3  class="ser">Publica tu negocio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nam maxime minus iusto cum. Nihil perspiciatis iste, maiores, vel quo praesentium minima rerum quae sequi harum molestias, quis facere mollitia.</p>
            </div>
            <div class="servicio-ind">
                <img src="{{asset('css/image/reservacion.png')}}" alt=""  class="imagen-sobre-servicio3">
                <h3  class="ser">Haz Tus Reservaciones</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nam maxime minus iusto cum. Nihil perspiciatis iste, maiores, vel quo praesentium minima rerum quae sequi harum molestias, quis facere mollitia.</p>
            </div>
            </div>
            </div>
     </section>
 </main>
   <footer>
       <div class="contenedor-footer">
           <div class="content-foo">
               <h4 class >Telefono: +504 2255-3409</h4>
               
           </div>
           <div class="content-foo">
               <h4>Email: elcatrachoviajero@gmail.com</h4>
           </div>
            </div>
           <h6 class="titulo-final"><class="titulo-final">&copy; ElCatrachoViajero</h6>
      
   </footer>
    </body>   
</html>