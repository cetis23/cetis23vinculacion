@extends('sistema.principall')

@section('contenido') 
          <meta charset="UTF-8">
            <link href="main.css" rel="stylesheet">
			<link href="reset.css" rel="stylesheet">
			
			<body>

	        <div class="container">
		    <div class="form__top">
			<h2><span>Registro De Alumno</span></h2>
		    </div>
		  <form class="form__reg" action="{{route('guardaal')}}" method="POST" enctype='multipart/form-data'>
				{{csrf_field()}}
			
				
			<input class="input" name="idalumn" type="text"  value="&#8962; ID: {{$idalumn}}" readonly="readonly" >	

            <br>
			
		  Apellido Paterno:<input  class="input" value="{{old('app')}}" name="app" type="text">

		  @if($errors->first('app'))
	   	     <i>{{ $errors->first('app') }}</i>
	   	     @endif 


		 Apellido Materno: <input class="input" value="{{old('apm')}}" name="apm" type="text">

		  @if($errors->first('apm'))
	   	     <i>{{ $errors->first('apm') }}</i>
	   	     @endif 




		 Nombre del Alumno: <input class="input" value="{{old('nomalumn')}}" name="nomalumn" type="text" >

		  @if($errors->first('nomalumn'))
	   	     <i>{{ $errors->first('nomalumn') }}</i>
	   	     @endif 




		  Grupo:<input class="input" value="{{old('grupo')}}" name="grupo" type="text" >	

		  @if($errors->first('grupo'))
	   	     <i>{{ $errors->first('grupo') }}</i>
	   	     @endif 

		  Turno:<input class="input" value="{{old('turno')}}" name="turno" type="text">

		  @if($errors->first('turno'))
	   	     <i>{{ $errors->first('turno') }}</i>
	   	     @endif 

	   	  Telefono 1:<input class="input" value="{{old('tel1')}}" name="tel1" type="text">

	   	  @if($errors->first('tel1'))
	   	     <i>{{ $errors->first('tel1') }}</i>
	   	     @endif 

		  Telefono 2:<input class="input" value="{{old('tel2')}}" name="tel2" type="text" >

		  @if($errors->first('tel2'))
	   	     <i>{{ $errors->first('tel2') }}</i>
	   	     @endif 

		  Correo 1:<input class="input" value="{{old('correo1')}}" name="correo1" type="text">

		  @if($errors->first('correo1'))
	   	     <i>{{ $errors->first('correo1') }}</i>
	   	     @endif 

		 Correo 2: <input class="input" value="{{old('correo2')}}" name="correo2" type="text" >

		  @if($errors->first('correo2'))
	   	     <i>{{ $errors->first('correo2') }}</i>
	   	     @endif 	

		  Codigo Postal:<input class="input" value="{{old('cp')}}" name="cp" type="text" >

		  @if($errors->first('cp'))
	   	     <i>{{ $errors->first('cp') }}</i>
	   	     @endif 

		  Modalidad:<input class="input" value="{{old('modalidad')}}" name="modalidad" type="text" >	

		  @if($errors->first('modalidad'))
	   	     <i>{{ $errors->first('modalidad') }}</i>
	   	     @endif 

			<br>

	   	     Municipio   <select name='idmun'>
            @foreach($todosmunicipios as $mu)
            <option value ='{{$mu->idmun}}'> {{$mu->nombremun}}</option>
            @endforeach</select>
			<br>

			Especialidad  <select name='idespe'>
            @foreach($todosespecialidad as $es)
            <option value ='{{$es->idespe}}'> {{$es->nomespe}}</option>
            @endforeach</select>
			<br>



			Asesor   <select name='idpractica'>
            @foreach($todospracticas as $pr)
            <option value ='{{$pr->idpractica}}'> {{$pr->asesorprac}}</option>
            @endforeach</select>
			<br>

			Documento  <select name='iddoc'>
            @foreach($todosdocumentos as $do)
            <option value ='{{$do->iddoc}}'> {{$do->nomdoc}}</option>
            @endforeach</select>
			<br>

			Folio   <select name='idtitulo'>
            @foreach($todostituloss as $ti)
            <option value ='{{$ti->idtitulo}}'> {{$ti->folio}}</option>
            @endforeach</select>
			<br>


             Seleccione Foto <input type  ='file' name = 'archivo'>
				
             @if($errors->first('archivo')) 
             <i> {{ $errors->first('archivo') }} </i> 
              @endif	<br>


	   	     
		  
		   <div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		    </form>
	        </div>
	
            </body>

			 
			</form>
@stop
