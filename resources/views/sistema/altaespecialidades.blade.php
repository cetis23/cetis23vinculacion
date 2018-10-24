@extends('sistema.principall')

@section('contenido') 
          <meta charset="UTF-8">
            <link href="main.css" rel="stylesheet">
			<link href="reset.css" rel="stylesheet">
<body>
<div class="container">
		    <div class="form__top">
			<h2><span>Registro de especialidad</span></h2>
		    </div>

<form class="form__reg" action ="{{route('guardaespecialidad')}}" method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

Clave <input class="input" type = 'text' name = 'idm' value="{{$idespe}}" readonly = 'readonly' >
<br>
@if($errors->first('idespe'))
<i> {{ $errors->first('idespe') }} </i>
@endif <br>

       <input class="input" value="{{old('nomespe')}}" name="nomespe" type="text" placeholder="&#128100;  Nombre " > 
<br><br>


<input type = 'submit' value = 'Guardar'>
</form>
</body>
@stop
