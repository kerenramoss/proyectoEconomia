@extends(".../Home/plantilla_base_Home")


@section("cabecera")
<div>
    <nav >
        <ul class="title"><h4>El Catracho Viajero</h4>
        <ul class="menu">
        <li ><a href=""> Mi Perfil</a>
        <ul class="submenu">
        <li><a href="">Mi Perfil</a></li>
          <li><a href="">Mis reservas</a></li>
          <li><a href="">salir</a></li>
        </ul>
      </li>
      </ul>
      </nav>
    </div>
      @section("contenido")
      <div class="contenidoB">
        <div class="cont1">
        <div class="anuncios">
        @foreach($anuncios as $anuncio)
         <div class="card-1"> <a methd="get" href="{{url('anuncios', array('id'=>$anuncio->id) ) }}">
          <img class="product-img" src="{{$anuncio->imag}}">
           <br>
          <h4>{{$anuncio->name}}</h4>
          <br>
          <h4>Lps. {{$anuncio->price}}</h4>
        </a>
         </div>
         @endforeach
      </div>
      <div class="cont1" >
        <div class="siderbar">
      <div class="list-dep">
        <h4>Seleccione el Departamento:</h4>
        <li> <a href="#">Todos los departamentos</a></li>
      @foreach($depto as $oneDep)
      <li> <a href="#"> {{$oneDep->name}} </a></li>
      @endforeach
   
      </div>
      <div class="list-tipe">
      <h4>Seleccione el Tipo de lugar:</h4>
      <li> <a href="#">Todos los Lugares  </a></li>
      @foreach($tipe as $onetip)
      <li> <a href="#">{{$onetip->name}}  </a></li>
      @endforeach
      </div>
      </div>
      </div>

      </div>
    </div>
  </div>