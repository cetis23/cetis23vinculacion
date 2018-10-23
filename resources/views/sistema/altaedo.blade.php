@extends('sistema.principall')

@section('contenido') 
          <meta charset="UTF-8">
            <link href="main.css" rel="stylesheet">
			<link href="reset.css" rel="stylesheet">
<body>
<div class="container">
		    <div class="form__top">
			<h2><span>Registro De Estado</span></h2>
		    </div>

<form class="form__reg" action ="{{route('guardamaestro')}}" method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

Clave <input class="input" type = 'text' name = 'idm' value="{{$idms}}" readonly = 'readonly' >
<br>
@if($errors->first('idm'))
<i> {{ $errors->first('idm') }} </i>
@endif <br>

       <input class="input" value="{{old('nombre')}}" name="nombre" type="text" placeholder="&#128100;  Nombre" > 
<br><br>
Edad <input class="input" type = 'text' name = 'edad' value="{{old('edad')}}">
<br><br>
Correo <input class="input" type = 'text' name = 'correo' value="{{old('correo')}}">
<br> 
@if($errors->first('correo'))
<i> {{ $errors->first('correo') }} </i>
@endif
 <br>
Codigo Postal <input class="input" type = 'text' name = 'cp' value="{{old('cp')}}">
<br>

Seleccione carrera<select name = 'idc'>
@foreach($carreras as $cr)
<option value = '{{$cr->idc}}'>{{$cr->nombre}}</option>
@endforeach
      </select>
<br>
@if($errors->first('archivo'))
<i> {{ $errors->first('archivo')}}</i>
@endif <br>
seleccione foto <input class="input" type ='file' name = 'archivo'>
<br>

<input type = 'submit' value = 'Guardar'>
</form>
</body>
@stop
