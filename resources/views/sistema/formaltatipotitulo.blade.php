@extends('sistema.principall')

@section('contenido') 
          <meta charset="UTF-8">
            <link href="main.css" rel="stylesheet">
			<link href="reset.css" rel="stylesheet">
			
			<body>

	        <div class="container">
		    <div class="form__top">
			<h2><span>Registro De Tipo Titulo</span></h2>
		    </div>
		  <form class="form__reg" action="{{route('gtt')}}" method="POST">
				{{csrf_field()}}
			
				
			<input class="input" name="idtipotitulo" type="text"  value="&#8962; ID: {{$idtipotitulo}}" readonly="readonly" >			
			
		  <input class="input" value="{{old('nomtipo')}}" name="nomtipo" type="text" placeholder="&#128100;  NombreTipo del titulo" >	
		  
		   @if($errors->first('nomtipo'))
	   	     <i>{{ $errors->first('nomtipo') }}</i>
	   	     @endif 


			
			<br>

	   	     Folio de titulo  <select name='idtitulo'>
            @foreach($todostitulos as $tt)
            <option value ='{{$tt->idtitulo}}'> {{$tt->folio}}</option>
            @endforeach</select>
			<br>


	   	     
		  
		   <div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		    </form>
	        </div>
	
            </body>

			 
			</form>
@stop
