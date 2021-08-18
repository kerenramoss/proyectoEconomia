@extends(".../Anuncios/plantilla_base_anuncioC")

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
<br>
    <div class="container-fluid">
	<div class="row">

		<div class="anunci">
			<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
				Crear un Anuncio </font><font style="vertical-align: inherit;">
			</font></font></h3>
		</div>
	</div>
	<div class="row">
        <div>
		<div class="cuerpo">
			<form action="{{ url('AnunciosC') }}" method="post">
				<div class="form-group">

					<label for="name1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						Nombre del lugar
					</font></font></label>
					<input name="name" type="name" class="form-control" id="name1">
				</div>
                <br>

                <select name="departament" class="form-control m-bot15" >

               @foreach($depto as $dep)
               <option value="{{$dep->name}}">{{$dep->name}}</option>
                @endForeach
                </select>


             <br>
             <select class="form-control m-bot15" name="tipeofplace">

                @foreach($tipe as $type)
                <option value="{{$type->name}}">{{$type->name}}</option>
                @endForeach
                </select>
                <br>
              <div class="form-group">

                <label for="price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Precio:
                    </font></font></label>
                    <input type="name" class="form-control" id="name1" name="price">
              </div>
              <br>
              <div class="form-group">

					<label for="name1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						Descripcion del Lugar
					</font></font></label>
					<input type="name" class="form-control" id="name1" name="description">
				</div>

                <div class="form-group">

					<label for="name1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						URL de Imagen
					</font></font></label>
					<input type="name" class="form-control" id="name1" name="imag">
				</div>
                {{csrf_field()}}
				<button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					Entregar
				</font></font></button>
			</form>

		</div>
</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
