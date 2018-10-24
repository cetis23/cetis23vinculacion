@extends('sistema.principall')

@section('contenido') 
          <meta charset="UTF-8">
            <link href="main.css" rel="stylesheet">
			<link href="reset.css" rel="stylesheet">
			
			<body>

	        <div class="container">
		    <div class="form__top">
			<h2><span>Registro De MUNICIPIO</span></h2>
		    </div>
		  <form class="form__reg" action="{{route('gmun')}}" method="POST">
				{{csrf_field()}}
			
				
			<input class="input" name="idmun" type="text"  value="&#8962; ID: {{$idmun}}" readonly="readonly" >			
			
		  <input class="input" value="{{old('nombremun')}}" name="nombremun" type="text" placeholder="&#128100;  Nombre Del Municipio" >	
		  
		   @if($errors->first('nombremun'))
	   	     <i>{{ $errors->first('nombremun') }}</i>
	   	     @endif 


			
			<br>

	   	     Estados   <select name='idestado'>
            @foreach($todosestados as $te)
            <option value ='{{$te->idestado}}'> {{$te->nomestado}}</option>
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
