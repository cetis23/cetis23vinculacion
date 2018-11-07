@extends('sistema.principall')

@section('contenido') 

<h1 align="center"> Reporte De Estados</h1>
<link rel="stylesheet" type="text/css" href="tabla.css">

<body>

<div align=center id="centra"> 
<table border=0 align="center">

<tr><th align="center"> ID </th><th align="center"> NOMBRE </th>
@foreach($es as $e)
<tr><td align="center"> {{$e->idestado}} </td><td align="center"> {{$e->nomestado}} </td>
     


</tr>
@endforeach
</table>

</div>
</body>
@stop



	
	
	
	
	
	
	
	



