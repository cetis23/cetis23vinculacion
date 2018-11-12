
<h1 align="center"> Reporte De Alumnos</h1>
<link rel="stylesheet" type="text/css" href="tabla.css">

<body>

<div align=center id="centra"> 
<table border=0 align="center">

<tr>
	<th align="center"> ID </th>
	<th align="center"> APELLIDO PATERNO</th>
	<th align="center"> APELLIDO MATERNO</th>
	<th align="center"> NOMBRE ALUMNO </th>
	<th align="center"> GRUPO</th> 
	<th align="center"> TURNO</th>
	 <th align="center"> TELEFONO 1</th>
	 <th align="center"> TELEFONO 2</th>
	 <th align="center"> CORREO 1</th>
	  <th align="center"> CORREO 2</th>
	  <th align="center"> CODIGO POSTAL </th>
	  <th align="center"> MODALIDAD</th>
	  <th align="center"> MUNICIPIO</th>
	  <th align="center"> ESPECIALIDAD</th>
	  <th align="center"> PRACTICA</th>
	  <th align="center"> DOCUMENTOS</th>
	  <th align="center"> TITULO</th>
	  <th align="center"> FOTO</th>

</tr>

@foreach($alu as $a)
<tr>
	<td align="center"> {{$a->idalumn}} </td>
	<td align="center"> {{$a->app}} </td>
	<td align="center"> {{$a->apm}} </td>
	<td align="center"> {{$a->nomalumn}} </td>
	<td align="center"> {{$a->grupo}} </td>
	<td align="center"> {{$a->turno}} </td>
	<td align="center"> {{$a->tel1}} </td>
	<td align="center"> {{$a->tel2}} </td>
	<td align="center"> {{$a->correo1}} </td>
	<td align="center"> {{$a->correo2}} </td>
	<td align="center"> {{$a->cp}} </td>
	<td align="center"> {{$a->modalidad}} </td>
	<td align="center"> {{$a->idmun}} </td>
	<td align="center"> {{$a->idespe}} </td>
	<td align="center"> {{$a->idpractica}} </td>
	<td align="center"> {{$a->iddoc}} </td>
	<td align="center"> {{$a->idtitulo}} </td>
<td><img src="{{asset('archivo/' .$a->archivo)}}" height=50 width=50></td>

</tr>
@endforeach

</table>



</div>

</body>



 

