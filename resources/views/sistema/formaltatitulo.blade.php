@extends('sistema.principall')

@section('contenido') 
          <meta charset="UTF-8">
            <link href="main.css" rel="stylesheet">
			<link href="reset.css" rel="stylesheet">
			
			<body>

	        <div class="container">
		    <div class="form__top">
			<h2><span>Registro De Titulo</span></h2>
		    </div>
		  <form class="form__reg" action="{{route('gtit')}}" method="POST">
				{{csrf_field()}}
			
				
			<input class="input" name="idtitulo" type="text"  value="&#8962; ID: {{$idtitulo}}" readonly="readonly" >			
			
		  <input class="input" value="{{old('folio')}}" name="folio" type="text" placeholder="&#128100;  Folio" >	

            @if($errors->first('folio'))
	   	     <i>{{ $errors->first('folio') }}</i>
	   	     @endif <br>

          <input class="input" value="{{old('idciclo')}}" name="idciclo" type="text" placeholder="&#128100;  ID Ciclo" >
		
		   
           @if($errors->first('idtitulo'))
	   	     <i>{{ $errors->first('idtitulo') }}</i>
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