@extends('sistema.principall')

@section('contenido') 

<h1 align="center"> Reporte De Municipios</h1>
<link rel="stylesheet" type="text/css" href="tabla.css">

<body>

<div align=center id="centra"> 
<table border=0 align="center">

<tr><th align="center"> ID </th><th align="center"> NOMBRE </th><th align="center"> ESTADO </th>
@foreach($mu as $m)
<tr><td align="center"> {{$m->idmun}} </td><td align="center"> {{$m->nombremun}} </td>
	<td align="center"> {{$m->idestado}} </td>
     


</tr>
@endforeach
</table>

</div>
</body>
@stop



	
	
	
	
	
	
	
	



