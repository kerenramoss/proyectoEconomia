
@extends(".../plantilla_base")

@section("cabecera")
    <nav >
      <a href="{{url('/')}}">Home</a>
      <a methd="get" href="{{url('registroarrendador/create')}}">Registrarse como Arrendador</a>
      <a methd="get" href="{{url('/registroarrendatario/create')}}">Registrarse como Arrendatario</a>
      </nav>

      @section("contenido")

      <main>
     <h1>Ingresar a sitio web </h1>
     <form  action="{{ url('ingresar') }}" method="post">
        <div>
        <label for="exampleInputEmail1" >Correo Electronico</label>
        @error('email') <p>{{"ingrese un correo"}}</p> @enderror
        @error('credenciales') <p>{{"ingrese un correo"}}</p> @enderror
        <input name="email" type="text" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    <div>
        <label for="exampleInputPassword1" >Contraseña</label>
        @error('password') <p>{{"ingrese su contraseña"}}</p> @enderror
        <input  name="password" type="password"  id="exampleInputPassword1">
    </div>
    {{csrf_field()}}
    <div>
    <button type="submit">Submit</button></div>
    </form>
</main>

<div class="espacio">
    <br>
    <br>
    <br>
</div>