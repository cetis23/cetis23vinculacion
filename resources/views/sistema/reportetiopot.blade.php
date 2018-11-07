


@extends('sistema.principall')

@section('contenido') 

<h1 align="center"> Reporte De Tipo De Titulos</h1>
<link rel="stylesheet" type="text/css" href="tabla.css">

<body>

<div align=center id="centra"> 
<table border=0 align="center">

<tr><th align="center"> ID </th><th align="center"> NOMBRE </th><th align="center"> TITULO </th>
@foreach($tt as $t)
<tr><td align="center"> {{$t->idtipotitulo}} </td><td align="center"> {{$t->nomtipo}} </td>
	<td align="center"> {{$t->idtitulo}} </td>
     


</tr>
@endforeach
</table>

</div>
</body>
@stop



	
	
	
	
	
	
	
	



