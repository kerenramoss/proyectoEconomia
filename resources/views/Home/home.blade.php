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
      <div class="contenidoB">
        <div class="cont1">
        <div class="anuncios">
        @foreach($depto as $oneDep)
         <div class="card-1">
          <img class="product-img" src="{{asset('css/image/paisaje.jpg')}}">
          <h4>Product name</h4>
         </div>
         @endforeach
      </div>
      <div class="cont1" >  
        <div class="siderbar">
      <div class="list-dep"> 
        <h4>Seleccione el Departamento:</h4>
        <li> <a href="">Todos los departamentos</a></li>
      @foreach($depto as $oneDep)
      <li> <a href="{{route(home.index,['depto'=>$oneDep->id]) }}"> {{$oneDep->name}} </a></li>
      @endforeach
      
      </div>
      <div class="list-tipe">
      <h4>Seleccione el Tipo de lugar:</h4>
      <li> <a href="">Todos los Lugares  </a></li>
      @foreach($tipe as $onetip)
      <li> <a href="">{{$onetip->name}}  </a></li>
      @endforeach
      </div>
      </div>
      </div>

      </div>
    </div>
  </div>