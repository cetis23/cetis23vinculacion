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
		  <form class="form__reg" action="{{route('ges')}}" method="POST">
				{{csrf_field()}}
			
				
			<input class="input" name="idestado" type="text"  value="&#8962; ID: {{$idestado}}" readonly="readonly" >			
			
		  <input class="input" value="{{old('nomestado')}}" name="nomestado" type="text" placeholder="&#128100;  Nombre Del Estado" >	
		  
		   @if($errors->first('nomestado'))
	   	     <i>{{ $errors->first('nomestado') }}</i>
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