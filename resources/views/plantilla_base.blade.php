<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>catracho El Catracho Viajero</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
    <header  class="cabecera"> 
    @yield("cabecera");
    </header>
    <main class="contenido">
       @yield("contenido");</main>
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