@extends(".../plantilla_base")

@section("cabecera")
    <nav >
      <a href="{{url('/')}}">Home</a>
      <a href="{{url('/registroA')}}">Registrarse como Arrendador</a>
      <a href="{{url('/registro')}}">Registrarse como Arrendatario</a>
      </nav>

      @section("contenido")
      <main>
     <h1>Registrarse Como Arrendador </h1>
     <form methd="post" action="/RegistroArrendador">
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Primer Nombre</label>
        <input name="fistName" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Primer Apellido</label>
        <input  name="secondName" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de Usuario</label>
        <input  name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
        <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input  name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña </label>
        <input  name="passwordc" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Acepto Terminos y Condiciones</label>
    </div>
    {{csrf_field()}}
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>

<div class="espacio"></div>