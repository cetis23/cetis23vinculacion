@extends('sistema.principall')

@section('contenido') 

<h1 align="center"> Reporte De Titulos</h1>
<link rel="stylesheet" type="text/css" href="tabla.css">

<body>

<div align=center id="centra"> 
<table border=0 align="center">

<tr><th align="center"> ID </th><th align="center"> NOMBRE </th><th align="center"> CICLO </th>
@foreach($ti as $t)
<tr><td align="center"> {{$t->idtitulo}} </td><td align="center"> {{$t->folio}} </td>
	<td align="center"> {{$t->idciclo}} </td>
     


</tr>
@endforeach
</table>

</div>
</body>
@stop




	
	
	
	
	
	
	
	



