@extends('sistema.principall')

@section('contenido') 
          <meta charset="UTF-8">
            <link href="main.css" rel="stylesheet">;
			<link href="reset.css" rel="stylesheet">;
			
			<body>

	        <div class="container">
		    <div class="form__top">
			<h2><span>Registro De Especialidad</span></h2>
		    </div>
		  <form class="form__reg" action="{{route('guardaespecialidad')}}" method="POST">
				{{csrf_field()}}
			
				
			<input class="input" name="idespe" type="text"  value="&#8962; ID: {{$idespe}}" readonly="readonly" >			
			
		 Nombre de la Especialidad: <input class="input" value="{{old('nomespe')}}" name="nomespe" type="text">	
		  
		   @if($errors->first('nomespe'))
	   	     <i>{{ $errors->first('nomespe') }}</i>
	   	     @endif <br>
		  
		   <div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		    </form>
	        </div> 
	
            </body>

			
			</form>

@stop