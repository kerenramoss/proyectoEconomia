@extends(".../Home/plantilla_base_Home")


@section("cabecera")
<div>
    <nav >
        <ul class="title"><h4>El Catracho Viajero</h4>
        <ul class="menu">
        <li ><a href=""> Mi Perfil</a>
        <ul class="submenu">
        <li><a href="">Mi Perfil</a></li>
          <li><a href="">Mis anuncios</a></li>
          <li><a href="">salir</a></li>
        </ul>
      </li>
      </ul>
      </nav>
    </div>
    @section("contenido")

<div class="anuncioDetalle">
        @foreach($anuncio as $anunci)
         <div class="cont">
           <div class="info"><div class="cont-img"><img class="img1" src="{{$anunci->imag}}"></div></div>
           <br>
           <div class="info">
               <div class="text-info">
          <h4>{{$anunci->name}}</h4>
          <div class="description"><p>{{$anunci->description}}</p></div>
          <br> 
          <h3>Tipo de locacion: {{$tipe[0]->name}}</h3>
          <h3>Departamento: {{$depto[0]->name}}</h3>
          <h4>Lps. {{$anunci->price}}</h4> 
          <div><button name="buton" type="submit" class="buton">Rentar</button></div> </div>
        </div> 
        </div>
 @endforeach
</div>
<div>
<div class="galeria">
    <h1>Otras Fotos del Lugar</h1>
 @foreach($imagenes as $imagen)
 <div class="carrusel"><img class="slader-img" src="{{$imagen->imag}}"></div>
 @endforeach
 <br>
 <br>
</div></div>