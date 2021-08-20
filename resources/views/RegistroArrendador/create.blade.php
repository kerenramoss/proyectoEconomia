@extends(".../plantilla_base")

@section("cabecera")
    <nav >
      <a href="{{url('/')}}">Home</a>
      <a methd="get" href="{{url('/registroarrendatario/create')}}">Registrarse como Arrendatario</a>
      <a methd="get" href="{{url('ingresar/create')}}">Ingresar</a>
      </nav>
      @section("contenido")
      <main>
      <h1>Registrarse Como Arrendador </h1>
     <form  action="{{ url('registroarrendador') }}" method="post">
        <div>
        <label for="exampleInputEmail1" >Primer Nombre</label>
        @error('fistName') <p>{{"agregue su nombre"}}</p> @enderror
        <input name="fistName" type="text" id="exampleInputEmail1" aria-describedby="emailHelp">
   
    </div>
    <div >
        <label for="exampleInputEmail1" >Primer Apellido</label>
        @error('secondName') <p>{{"agregue su apellido"}}</p> @enderror
        <input  name="secondName" type="text"  id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div >
        <label for="exampleInputEmail1" >Nombre de Usuario</label>
        @error('username') <p>{{"agregue el nombre del usuario debe ser unico"}}</p> @enderror
        <input  name="username" type="text"  id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div>
        <label for="exampleInputEmail1" >Correo Electronico</label>
        @error('email') <p>{{"se necesita ingresar un correo que no este ya registrado"}}</p> @enderror
        <input name="email" type="text" id="exampleInputEmail1" aria-describedby="emailHelp">
        <h4>We'll never share your email with anyone else.</h4>
        </div>
    <div>
        <label for="exampleInputPassword1">Contraseña</label>    
        @error('password') <p>{{"ingrese Contraseña"}}</p> @enderror   
        <input  name="password" type="password"  id="exampleInputPassword1">
    </div>
    <div>
        <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña </label>
         @error('passwordc') <p>{{"Las contraseñas deben coincidir"}}</p> @enderror         
        <input  name="passwordc" type="password"  id="exampleInputPassword1">
    </div>
    <div>{{csrf_field()}}
    <input type="checkbox"  id="exampleCheck1" > 
    @error('check') <p>{{"Si deseas registrarte debes aceptar terminos y condiciones"}}</p> @enderror
        <a for="exampleCheck1">Acepto Terminos y Condiciones</a></div> 
   <div><button name="check" type="submit">Registrarse</button></div> 
  
</div>

</form>
</main>

<div class="espacio"></div>