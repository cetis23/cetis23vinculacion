@extends('sistema.principall')

@section('contenido') 

<h1 align="center"> Reporte De Ciclos</h1>
<link rel="stylesheet" type="text/css" href="tabla.css">

<body>

<div align=center id="centra"> 
<table border=0 align="center">

<tr><th align="center"> ID </th><th align="center"> FECHA INICIO </th><th align="center"> FECHA FIN </th>
@foreach($ci as $c)
<tr><td align="center"> {{$c->idciclo}} </td><td align="center"> {{$c->fechainicio}} </td>
	<td align="center"> {{$c->fechafin}} </td>
     


</tr>
@endforeach
</table>

</div>
</body>
@stop



	
	
	
	
	
	
	
	



