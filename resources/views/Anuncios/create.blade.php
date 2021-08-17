@extends(".../Anuncios/plantilla_base_anuncioC")


@section("cabecera")
<div>
    <nav >
        <ul class="title"><h4>El Catracho Viajero</h4>
        <ul class="menu">
        <li ><a href=""> Mi Perfil</a>
        <ul class="submenu">
        <li><a href="">Mi Perfil</a></li>
        <li><a href="{{url('AnunciosC/create')}}">Mis anuncios</a></li>
          <li><a href="">salir</a></li>
        </ul>
      </li>
      </ul>
      </nav>
    </div>
       @section("contenido")
      
       <div class="contener">
         <div>
           <h1>Lista de Anuncios publicados</h1>
                 <table class="table">
                    <thead class="encabezado">
                        <tr>
                            <td>Imagen de anuncio</td>
                            <th>Nombre del Anuncios</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                            <th>Configuraciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($anuncios as $anuncio)
                            <tr>
                                <td><img src="{{$anuncio->imag}}" alt="" class="imag"></td>
                                <td>{!! $anuncio->name !!}</td>
                                <td>{!! $anuncio->price !!}</td>
                                <td>{!! $anuncio->description !!}</td>
                                <th><button name="buton" type="submit" class="editar">Editar</button><button name="buton" type="submit" class="eliminar">Eliminar</button></th>
                            </tr>
                        @endforeach
  
  </div> 
</div></div>
  <div>
    <button name="buton" type="submit" class="crear"><a href="{{url('AnunciosC/show')}}">Crear Un Nuevo Anuncio</a></button>
  </div>
    
</div>

@section("end")
<div>
<!--footer>
       <div class="contenedor-footer">
           <div class="content-foo">
               <h4 class >Telefono: +504 2255-3409</h4>      
           </div>
           <div class="content-foo">
               <h4>Email: elcatrachoviajero@gmail.com</h4>
           </div>
            </div>
           <h6 class="titulo-final"><class="titulo-final">&copy; ElCatrachoViajero</h6>
      
   </footer-->

</div>
  

 
    