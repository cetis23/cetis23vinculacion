@extends('sistema.principall')

@section('contenido') 
          <meta charset="UTF-8">
            <link href="main.css" rel="stylesheet">
			<link href="reset.css" rel="stylesheet">
			
			<body>

	        <div class="container">
		    <div class="form__top">
			<h2><span>Registro De Ciclos</span></h2>
		    </div>
		  <form class="form__reg" action="{{route('gcic')}}" method="POST">
				{{csrf_field()}}
			
				
			<input class="input" name="idciclo" type="text"  value="&#8962; ID: {{$idciclo}}" readonly="readonly" >			
			
		  <input class="input" value="{{old('fechainicio')}}" name="fechainicio" type="text" placeholder="&#128100;  Fecha de inicio" >	

            @if($errors->first('fechainicio'))
	   	     <i>{{ $errors->first('fechainicio') }}</i>
	   	     @endif <br>

          <input class="input" value="{{old('fechafin')}}" name="fechafin" type="text" placeholder="&#128100;  Fecha final" >
		
		   
           @if($errors->first('fechafin'))
	   	     <i>{{ $errors->first('fechafin') }}</i>
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