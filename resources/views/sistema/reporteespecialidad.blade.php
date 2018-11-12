@extends('sistema.principall')

@section('contenido') 

<h1 align="center"> Reporte De Especialidades</h1>
<link rel="stylesheet" type="text/css" href="tabla.css">

<body>

<div align=center id="centra"> 
<table border=0 align="center">

<tr><th align="center"> ID </th><th align="center"> ESPECIALIDAD </th>
@foreach($es as $e)
<tr><td align="center"> {{$e->idespe}} </td><td align="center"> {{$e->nomespe}} </td>
</tr>
@endforeach
</table>

</div>
</body>
@stop



	
	
	
	
	
	
	
	



